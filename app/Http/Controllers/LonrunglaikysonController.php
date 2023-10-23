<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\Video;
use App\Models\Post;
class LonrunglaikysonController extends Controller
{
    public function trangchu()
    {   
        $video = Video::first();
        
        $dacsannguyencon = Sanpham::where('category_id', '=', 27)->orderBy('id', 'desc')->take(4)->get();
        $sanphamhuonghuuco = Sanpham::where('category_id', '=', 28)->orderBy('id', 'desc')->take(4)->get();
        // $tintucmoi = Post::where('category_id', '=', 29)->orderBy('id', 'desc')->take(5)->get();
        
        return view('lonrunglaikyson.posts.home', [
            'dacsannguyencon' => $dacsannguyencon,
            'sanphamhuonghuuco' => $sanphamhuonghuuco,
            // 'video' => $video,
            // 'tintucmoi' => $tintucmoi,
        ]);
    }

    public function sanpham()
    {       
        $sanpham1 = Sanpham::where('category_id', '=', 18)->orderBy('id', 'asc')->take(9)->get();
        return view('lonrunglaikyson.posts.sanpham', [
            'sanpham1' => $sanpham1,
        ]);
    }

    public function gioithieu()
    {       
        $gioithieu = Post::where('category_id', '=', 20)->orderBy('id', 'desc')->first();
        return view('lonrunglaikyson.posts.gioithieu', [
            'gioithieu' => $gioithieu,
        ]);
    }

    public function lienhe()
    {       
        
        return view('lonrunglaikyson.posts.lienhe', [
            
        ]);
    }
    public function chitietsanpham($slug)
    {       
        $chitiet = Sanpham::where('slug', $slug)->first();

        $sanphamlienquan = Sanpham::where('category_id', '=', 28)->orderBy('id', 'asc')->take(4)->get();
        // return $sanphamlienquan;
        return view('lonrunglaikyson.posts.chitietsanpham', [
            'chitiet' => $chitiet,
            'sanphamlienquan' => $sanphamlienquan,
        ]);
    }
    public function chitietbaiviet($slug)
    {       
        $chitietbv = Post::where('slug', $slug)->first();
        // return $chitietbv;
        return view('lonrunglaikyson.posts.chitietbaiviet', [
            'chitietbv' => $chitietbv,
        ]);
    }
    public function cauchuyensanpham()
    {
        $cauchuyensanpham = Post::where('category_id', '=', 20)->orderBy('id', 'desc')->first();
        return view('lonrunglaikyson.posts.cauchuyensanpham', [
            'cauchuyensanpham' => $cauchuyensanpham,
        ]);
    }
}
