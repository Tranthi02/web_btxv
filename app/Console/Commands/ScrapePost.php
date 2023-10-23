<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Weidner\Goutte\GoutteFacade;

class ScrapePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $categories = [
            [
                "slug" => "tin-tuc-cat25",
                "name" => "Tin tức",

            ],
            [
                "slug" => "tin-trong-nuoc-cat1071",
                "name" => "Tin trong nước",

            ],
            [
                "slug" => "tin-nuoc-ngoai-cat1072",
                "name" => "Tin nước ngoài",

            ],
            [
                "slug" => "tin-hoat-dong-cat2078",
                "name" => "Tin hoạt động",

            ],
            [
                "slug" => "he-thong-trung-bay-cat26",
                "name" => "Hệ thống trưng bày",

            ],
            [
                "slug" => "cac-phong-trung-bay-cat1074",
                "name" => "Các phòng trưng bày",

            ],
            [
                "slug" => "suu-tap-hien-vat-cat2074",
                "name" => "Sưu tập hiện vật",

            ],
            [
                "slug" => "nghien-cuu-khoa-hoc-cat64",
                "name" => "Nghiên cứu khoa học",

            ],
            [
                "slug" => "toa-dam-cat2075",
                "name" => "Tọa đàm",

            ],
            [
                "slug" => "hoi-thao-cat2076",
                "name" => "Hội thảo",
            ],
            [
                "slug" => "chuyen-de-cat2077",
                "name" => "Chuyên đề",
            ],
            [
                "slug" => "cong-khai-tai-chinh-cat2073",
                "name" => "Công khai tài chính",
            ],

        ];

        foreach ($categories as $category) {
            $slugCate = $category['slug'];
            $nameCate = $category['name'];

            $Categories = new Category;
            $Categories->name = $nameCate;
            $Categories->slug = $slugCate;

            $Categories->save();
        }

        foreach ($categories as $category) {
            $baseUrl = 'http://btxvnt.org.vn/' . $category["slug"];
            $page = 1;
            while (true) {
                $url = $baseUrl . $category["slug"] . '?p=' . $page;

                $crawler = GoutteFacade::request('GET', $url);

                $linkPost = $crawler->filter('div.post-heading h3 a')->each(function ($node) {
                    return $node->attr("href");
                });
                if (empty($linkPost)) {
                    break;
                }
                foreach ($linkPost as $link) {
                    $categorySlug =  $category['slug'];
                    // $this->info($categorySlug);
                    $category = Category::where('slug', $categorySlug)->first();
                    if ($category) {
                        $categoryId = $category->id;
                        // $this->info($categoryId);
                        $this->scrapeData($link, $categoryId);
                    } else {
                        // Xử lý tình huống nếu danh mục không được tìm thấy
                    }
                    $this->scrapeData($link, $categoryId);
                }

                $page++;
            }
        }
    }

    public function scrapeData($url, $categoryId)
    {
        $crawler = GoutteFacade::request('GET', $url);

        $title = $this->crawlData('div.post-heading', $crawler);

        $excerpt = $this->crawlData('div.post-entry p span span', $crawler);
        $contentCrawler = $crawler->filter('div.post-entry');

        if ($contentCrawler->count() > 0) {
            $content = $contentCrawler->html();
        } else {
            $content = "NULL";
        }
        $content = $crawler->filter('div.post-entry')->html();

        if ($crawler->filter('div.post-entry p span span em u img')->count() > 0) {

            $crawler->filter('div.post-entry p span span img')->each(function ($node) use (&$content) {
                $imgHtml = $node->outerHtml(); // Lấy HTML của thẻ img
                $content .= $imgHtml; // Thêm HTML của ảnh vào nội dung
            });
        }
        $slug = Str::slug($title);

        if (Post::where('slug', $slug)->exists()) {
            return;
        }

        $dataPost = [
            'title' => $title,
            'slug' => $slug,
            'content' => $content,
            'excerpt' => $excerpt,
            'category_id' => $categoryId,
        ];
        Post::create($dataPost);
    }

    protected function crawlData(string $type, $crawler)
    {
        $result = $crawler->filter($type)->each(function ($node) {
            return $node->text();
        });
        if (!empty($result)) {
            return $result[0];
        }

        return '';
    }
}
