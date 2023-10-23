<?php

namespace App\Http\Controllers;

use DOMDocument;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class CrawlerController extends Controller
{
    public function index()
    {
        $url = 'http://www.btxvnt.org.vn/tin-trong-nuoc-cat1071';

        $client = new Client();
        //
        $crawler = $client->request('GET', $url);
        $crawler->filter('.post-image .post-heading')->each(
            function (Crawler $node) {
                $name = $node->filter('a')->text();
                return $name;
                $price = $node->filter('.price strong')->text();

                $wholeStar = $node->filter('.icontgdd-ystar')->count();
                $halfStar = $node->filter('.icontgdd-hstar')->count();
                $rate = $wholeStar + 0.5 * $halfStar;
            }
        );

        return $crawler;
    }
}
