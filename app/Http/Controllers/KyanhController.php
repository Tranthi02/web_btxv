<?php

namespace App\Http\Controllers;

use App\Models\Anhtt as ModelsAnhtt;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Danhmuccon;
use App\Models\Post;
use App\Models\Anhtt;
use App\Models\danhmuc;
use App\Models\Document;
use App\Models\Sanpham;
use App\Models\thuvienanh;
use App\Models\Video;
use App\Nova\BaiViet;
use Illuminate\Support\Facades\DB;

class KyanhController extends Controller
{
    //
 
    public function trangchu()
    {       
        $slider = Sanpham::all();
        // return $slider;
        $banner = Sanpham::orderBy('id', 'desc')->take(3)->get();
        $index = [];
        foreach($banner as $bn){
            array_push($index, $bn->id);
        }
        
        $baiviet_1 = Sanpham::whereNotIn('id', $index)->orderBy('id', 'desc')->take(8)->get();
        $baiviet_2 = Sanpham::orderBy('id', 'desc')->take(4)->get();
        foreach($baiviet_2 as $bv_2){
            array_push($index, $bv_2->id);
        }

        $baiviet_3 = Sanpham::orderBy('id', 'desc')->get();
        // return $baiviet_3;
        $baiviet_4 = Sanpham::whereNotIn('id', $index)->orderBy('id', 'desc')->take(2)->get();
        // return $baiviet_4;
        return view('posts.home', [
            'baiviet_1' => $baiviet_1,
            'baiviet_2' => $baiviet_2,
            'baiviet_3' => $baiviet_3,
            'baiviet_4' => $baiviet_4,
            'banner' => $banner,
            'slider' => $slider,
            
        ]);
    }


    public function sanpham($slug)
    {
        // return 1;
        $danhmuc = Category::where('slug' , $slug)->first();
        $sanpham = Sanpham::where('category_id','=' ,$danhmuc->id)->orderBy('id', 'desc')->take(4)->get();
        // return $danhmuc;
        return view('posts.sanpham', [
            'sanpham' => $sanpham,
            'danhmuc' => $danhmuc
        ]);
    }

    public function gioithieu()
    {

        
        $banner = Post::where('category_id','=' , 20)->orderBy('id', 'desc')->take(4)->get();
        $index = [];
        foreach($banner as $bn){
            array_push($index, $bn->id);
        }
        $gioithieubottom = Post::where('category_id','=' , 20)->whereNotIn('id',  $index)->orderBy('id', 'desc')->take(12)->get();
        // return $gioithieubottom;
        return view('posts.gioithieu', [
            'banner' => $banner,
            'gioithieubottom' => $gioithieubottom,
        ]);
    }
    public function lienhe()
    {

        return view('posts.lienhe', [

        ]);
    }

    public function taikhoan()
    {

        return view('posts.taikhoan', [

        ]);
    }

    public function chitietsanpham($slug)
    {
        $xemchitiet = Sanpham::where('slug' , $slug)->first();
        // return $xemchitiet;
        return view('posts.chitietsanpham', [
            'xemchitiet' => $xemchitiet,
        ]);
    }

    public function video()
    {
        $video = Video::orderBy('id', 'desc')->take(5)->get();
        // return $video;
        return view('posts.video', [
            'video' => $video,
        ]);
    }
   
   

   
}
