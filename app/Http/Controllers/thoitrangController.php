<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

use App\Models\Sanpham;

class thoitrangController extends Controller
{
    public function trangchu()
    {
        // $tintuc1 = Post::where('category_id', '=', 20)->orderBy('id', 'desc')->first();
        $tintuc2 = Sanpham::where('category_id', '=', 18)->orderBy('id', 'desc')->take(8)->get();
        // return $tintuc2;
        $tintuc1 = Post::where('category_id', '=', 21)->orderBy('id', 'desc')->take(1)->get();
        // return $tintuc1;

        $tintuc3 = Post::where('category_id', '=', 17)->orderBy('id', 'desc')->take(1)->get();
        //  return $tintuc3;
        // $video = Video::orderBy('id', 'desc')->take(2)->get();
        //
       
        return view('thoitrang.posts.home', [
             'tintuc1' => $tintuc1,
            'tintuc2' => $tintuc2,
            // 'video' => $video,
        ]);
    }


    public function sanpham()
    {
        $sanpham = sanpham::where('category_id', '=', 18)->orderBy('id', 'desc')->get();
        // return $sanpham;
        
        return view('thoitrang.posts.sanpham', [
            'sanpham' => $sanpham,
            
        ]);
    }

    public function gioithieu()
    {

        
        
        return view('thoitrang.posts.gioithieu', [
           
        ]);
    }
    public function lienhe()
    {

        return view('thoitrang.posts.lienhe', [

        ]);
    }

    public function taikhoan()
    {

        return view('posts.taikhoan', [

        ]);
    }

    // public function chitietsanpham($slug)
    // { 
    //     $sanpham = sanpham::where('category_id', '=', 21)->orderBy('id', 'desc')->get();
    //      return $sanpham;
    //     return view('gasonky.posts.chitietsanpham', [
            
    //     ]);
    // }
    public function chitietsanpham()
    {
        // $sanpham = Sanpham::where('slug' , $request->slug)->first();
        //  return $sanpham;

        $sanpham = sanpham::where('category_id', '=', 20)->orderBy('id', 'desc')->get();
        //  return  $sanpham;
        
        return view('thoitrang.posts.chitietsanpham', [
            'sanpham' => $sanpham,
        ]);
       
            
    }


    // trang chi tiết sản phẩm
    public function chitiettintuc(Request $request)
    {
        // $xemchitiet = Sanpham::where('slug' , $request->slug)->first();
        //  return $xemchitiet;

        $xemchitiet = sanpham::where('category_id', '=', 20)->orderBy('id', 'desc')->get();
        //  return  $xemchitiet;
        
        return view('thoitrang.posts.chitiettintuc', [
            'xemchitiet' => $xemchitiet,
        ]);
       
            
    }




    public function tintuc()
    {
        
        return view('thoitrang.posts.tintuc', [
            
        ]);
    }


    // public function video()
    // {
    //     $video = Video::orderBy('id', 'desc')->take(5)->get();
    //     // return $video;
    //     return view('posts.video', [
    //         'video' => $video,
    //     ]);
    // }
   
}
