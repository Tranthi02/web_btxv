<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

use App\Models\Sanpham;
use App\Models\Video;


class GaSachSonKyController extends Controller
{
    //
    //
 
    public function trangchu()
    {
        // $tintuc1 = Post::where('category_id', '=', 20)->orderBy('id', 'desc')->first();
        $tintuc2 = Sanpham::where('category_id', '=', 18)->orderBy('id', 'desc')->take(7)->get();
        // return $tintuc2;
        $tintuc1 = Post::where('category_id', '=', 21)->orderBy('id', 'desc')->take(1)->get();
        // return $tintuc1;

        $tintuc3 = Post::where('category_id', '=', 17)->orderBy('id', 'desc')->take(3)->get();
        //  return $tintuc3;

        // $video = Video::orderBy('id', 'desc')->take(2)->get();
       
        return view('gasonky.posts.home', [
             'tintuc1' => $tintuc1,
            'tintuc2' => $tintuc2,
            'tintuc3' => $tintuc3,
            // 'video' => $video,
        ]);
    }


    public function sanpham()
    {
        
        $sanpham = sanpham::where('category_id', '=', 18)->orderBy('id', 'desc')->get();
        // return $sanpham;
        
        return view('gasonky.posts.sanpham', [
            'sanpham' => $sanpham,
            
        ]);
    }

    public function gioithieu()
    {

        $gioithieu = Post::where('category_id', '=', 20)->orderBy('id', 'desc')->take(1)->get();
        // return $gioithieu;
        
        return view('gasonky.posts.gioithieu', [
            'gioithieu' => $gioithieu,
           
        ]);
    }
    public function lienhe()
    {
          return view('gasonky.posts.lienhe', [

        ]);
    }

    public function taikhoan()
    {

        return view('posts.taikhoan', [

        ]);
    }


    public function chitietsanpham(Request $request)
    {   
     
        $sanpham = Sanpham::where('slug' ,  $request->slug)->first();
        // return $sanpham;
        return view('gasonky.posts.chitietsanpham', [
            'sanpham' => $sanpham,
           
        ]);
    }


    // trang chi tiết sản phẩm

    public function chitiettintuc(Request $request)
    {   
     
        $xemchitiet = Sanpham::where('slug' ,  $request->slug)->first();
        // return $xemchitiet;
        return view('gasonky.posts.chitiettintuc', [
            'xemchitiet' => $xemchitiet,
           
        ]);
    }


    public function tintuc()
    {
        
        return view('gasonky.posts.tintuc', [
            
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
