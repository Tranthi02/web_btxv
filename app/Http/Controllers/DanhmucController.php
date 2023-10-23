<?php

namespace App\Http\Controllers;

use App\Models\Danhmuccon;
use App\Models\Post;
use App\Models\Category;
use App\Models\Document;
use App\Models\DocumentType;
use App\Models\Hoidap;
use App\Models\Sanpham;
use Illuminate\Http\Request;
use App\Models\Anhtt;
use App\Models\Baivietdon;


class DanhmucController extends Controller
{
    public function danhmuc($slug)
    {
        $category = Category::where('slug', $slug)->first();  
        $posts = Post::where('category_id', $category->id)->orderBy('id', 'desc')->paginate(12);
        foreach($posts as $pt){
            $pt->nnd = $pt->created_at->format('d/m/Y');
        }
  
        return view('posts.danhmuc', [
            'posts' => $posts,
            'category' => $category,
            // 'category' => $category,
            // 'tendm' => $tendm,
            // 'tentrc' => $tentrc,
            //'noibat2' => $noibat2,
        ]);
    }


    public function chitiet($slug)
    {
        $chitiet = Post::where('slug', $slug)->firstOrFail();
        $lienquan = Post::where('id', '!=' , $chitiet->id)->orderBy('id', 'desc')->take(5)->get();
    
        return view('posts.chitiet', [
            'chitiet' => $chitiet,
            'lienquan' => $lienquan,
        ]);
    }

    public function danhsach($slug)
    {
        
        return view('posts.danhsach', [
           

        ]);
    }

    public function baiviet($slug)
    {  
        
      
        $category = Category::where('slug',$slug)->first();
        $baiviet = Post::where('category_id', $category->id )->first();
        return view('posts.baivietdon', [
            'baiviet' => $baiviet,
            'category' => $category,
        ]);
    }

    public function chitietsanpham($slug)
    {
             
        $chitiet = Sanpham::where('slug', $slug)->firstOrFail();
        $category1 = Category::where('id',  $chitiet->category_id)->first();
        // return  $category1;
        // return $slug; 
       
        return view('posts.chitietsanpham', [
            'chitiet' => $chitiet,
            'category1' => $category1,
        ]);
    }

    public function sanpham($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $posts = Sanpham::where('category_id', $category->id)->orderBy('id', 'desc')->paginate(12);
        
        return view('posts.sanpham', [
            'posts' => $posts,
             'category' => $category,
    
        ]);
    }
    

    
    // public function sodowebsite()
    // {   
    //     $cats = Category::where('parent_id','=', null)->get();
    //     $baiviet = Baivietdon::where('slug', $slug)->orderBy('id', 'desc')->fitst();
    //     return view('posts.baivietdon', [
    //         'cats' => $cats,
    //         'baiviet' => $baiviet,
    //     ]);
    // }
}