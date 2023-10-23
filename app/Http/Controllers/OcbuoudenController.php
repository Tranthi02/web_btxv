<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Sanpham;
use Illuminate\Http\Request;

class OcbuoudenController extends Controller
{
    public function trangchu()
    {
       $sanphambanchay = Sanpham::where('category_id', '=', 31)->where('spnoibat', '=', 1)->orderBy('id', 'desc')->take(4)->get();
       $sanphammoi = Sanpham::where('category_id', '=', 32)->where('spchinh', '=', 1)->orderBy('id', 'desc')->take(4)->get();
       $ocgiong = Sanpham::where('category_id', '=', 33)->where('spchinh', '=', 1)->where('spnoibat', '=', 1)->orderBy('id', 'desc')->take(3)->get();
       $tintuc = Post::where('category_id', '=', 34)->orderBy('id', 'desc')->take(6)->get();
        return view('ocbuouden.posts.home', [
            'sanphambanchay' => $sanphambanchay,
            'sanphammoi' => $sanphammoi,
            'ocgiong' => $ocgiong,
            'tintuc' => $tintuc,
        ]);
    }


    public function sanpham()
    {
        $allsanpham = Sanpham::all();
        return view('ocbuouden.posts.sanpham', [
            'allsanpham' => $allsanpham,
            
        ]);
    }

    public function gioithieu()
    {
        $gioithieu = Post::where('category_id', '=', 20)->orderBy('id', 'desc')->first();
        return view('ocbuouden.posts.gioithieu', [
            'gioithieu' => $gioithieu,
           
        ]);
    }

    public function cauchuyensanpham()
    {
        $cauchuyensanpham = Post::where('category_id', '=', 35)->orderBy('id', 'desc')->first();
        return view('ocbuouden.posts.cauchuyensanpham', [
            'cauchuyensanpham' => $cauchuyensanpham,
           
        ]);
    }
    public function lienhe()
    {

        return view('ocbuouden.posts.lienhe', [

        ]);
    }

    public function chitiettintuc($slug)
    {
        $baivietchitiet = Post::where('slug', $slug)->where('published_at', '=', null)->first();
        $sanphambanchay = Sanpham::where('category_id', '=', 31)->where('spnoibat', '=', 1)->orderBy('id', 'desc')->take(4)->get();
        $tinlienquan = Post::where('category_id', '=', 34)->orderBy('id', 'desc')->take(6)->get();
        return view('ocbuouden.posts.chitiettintuc', [
            'baivietchitiet' => $baivietchitiet,
            'tinlienquan' => $tinlienquan,
            'sanphambanchay' => $sanphambanchay,
        ]);
    }

    public function chitietsanpham($slug)
    {
        $chitietsanpham = Sanpham::where('slug', $slug)->first();
        $sanphammoi = Sanpham::where('category_id', '=', 32)->where('spchinh', '=', 1)->orderBy('id', 'desc')->take(4)->get();
        $tinlienquan = Post::where('category_id', '=', 34)->orderBy('id', 'desc')->take(6)->get();

        return view('ocbuouden.posts.chitietsanpham', [
            'chitietsanpham' => $chitietsanpham,
            'sanphammoi' => $sanphammoi,
            'tinlienquan' => $tinlienquan,
            
        ]);
    }


}
