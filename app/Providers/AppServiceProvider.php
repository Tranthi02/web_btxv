<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Category;
use App\Models\Danhmuccon;
use App\Models\Post;
use App\Models\Anhtt;
use App\Models\Sanpham;
use Illuminate\Pagination\Paginator;
use App\Models\Video;
use App\Models\DB;
// use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // $video = Video::all();
        // View::share('video',  $video);
        $danhmuc = getDanhmuc(null);
        // Paginator::useBooststrap();
        View::share('danhmuc',  $danhmuc);
        // View::share('gioithieu',  $gioithieu);
        // View::share('demdmc',  $demdmc);
        // View::share('anhtt', $anhtt);
        // View::share('cats', $cats);
        $tintucmoi = Post::where('category_id', '=', 29)->orderBy('id', 'desc')->take(5)->get();
        View::share('tintucmoi',  $tintucmoi);
        $video1 = Video::first();

        View::share('video1',  $video1);
        Paginator::useBootstrap();


       
        // Paginator::useBootstrap();

        
    }
}
