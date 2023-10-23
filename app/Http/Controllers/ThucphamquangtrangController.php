<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Sanpham;
use App\Models\Video;


class ThucphamquangtrangController extends Controller
{
    public function trangchu()
    {   
        $videomsx = Video::orderBy('id','desc')->take(6)->get();    
        $tintuchoatdong = Post::where('category_id','=',29)->orderBy('id','desc')->take(20)->get();
        $sanphamnoibat = Sanpham::where('category_id','=',27)->orderBy('id','desc')->get();
        // return $sanphamnoibat;
        return view('thucphamquangtrang.posts.home', [
            'tintuchoatdong' => $tintuchoatdong,
            'sanphamnoibat' => $sanphamnoibat,
            'videomsx' => $videomsx,
        ]);
    }

    public function sanpham()
    {       
        $sanpham = Sanpham::paginate(6);
        return view('thucphamquangtrang.posts.sanpham', [
            'sanpham' => $sanpham,
        ]);
    }
    // public function video()
    // {       
    //     $videomsx = Video::paginate(6);
    //     return view('thucphamquangtrang.posts.video', [
    //         'videomsx' => $videomsx,
    //     ]);
    // }

    public function chitietsanpham($slug){
        $chitiet = Sanpham::where('slug',$slug)->first();
        $sanphamlienquan = Sanpham::orderBy('id','desc')->take(6)->get();
        return view('thucphamquangtrang.posts.chitietsanpham', [
            'chitiet' => $chitiet,
            'sanphamlienquan' => $sanphamlienquan,
        ]);
    }

    public function chitietvideo($slug){
        $chitietvideo = Video::where('slug',$slug)->first();
        $videolienquan = Video::orderBy('id','desc')->take(6)->get();
        return view('thucphamquangtrang.posts.chitietvideo', [
            'chitietvideo' => $chitietvideo,
            'videolienquan' => $videolienquan,
        ]);
    }
    public function gioithieu()
    {       
        $gioithieu = Post::where('category_id','=',20)->first();  
        return view('thucphamquangtrang.posts.gioithieu', [
            'gioithieu' => $gioithieu,
        ]);
    }

    public function cauchuyensanpham()
    {       
        $cauchuyensanpham = Post::where('category_id','=',29)->first();  
        return view('thucphamquangtrang.posts.cauchuyensanpham', [
            'cauchuyensanpham' => $cauchuyensanpham,
            
        ]);
    }

    public function chitietbaiviet($slug){
        $chitietbaiviet = Post::where('slug',$slug)->first();        
        return view('thucphamquangtrang.posts.chitietbaiviet', [
            'chitietbaiviet' => $chitietbaiviet,
            
        ]);
    }

    public function lienhe()
    {       
        
        return view('thucphamquangtrang.posts.lienhe', [
            
        ]);
    }
}
