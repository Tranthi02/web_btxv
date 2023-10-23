<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HoneyController;
use App\Http\Controllers\KyanhController;
use App\Http\Controllers\BotngheController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\GaSachSonKyController;
use App\Http\Controllers\LonrunglaikysonController;
use App\Http\Controllers\OiBinhMapController;
use App\Http\Controllers\LuonKhoiMyController;
use App\Http\Controllers\OcbuoudenController;
use App\Http\Controllers\thoitrangController;
use App\Http\Controllers\ThucphamQuanbeoController;
use App\Http\Controllers\BaotangController;
use App\Http\Controllers\CrawlerController;
use App\Http\Controllers\ThucphamquangtrangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
#Route::get('/lien-he(đường dẫn)', [ProPhuongnamController::class, 'lienhe (tên fublic trong controller)'])->name('pn.lienhe (là controller) ');
// home layout
// Route::get('', [HoneyController::class, 'homeone'])->name('homelayout.homeone');
// end home layout

// if (env('DB_DATABASE') == 'banhchungthanhduyen') {
//     Route::get('/', [KyanhController::class, 'trangchu'])->name('posts.home');
//     Route::get('/trang-chu', [KyanhController::class, 'trangchu'])->name('posts.home');
//     Route::get('/san-pham', [KyanhController::class, 'sanpham'])->name('posts.sanpham');
//     Route::get('/chi-tiet-san-pham', [KyanhController::class, 'chitietsanpham'])->name('posts.chitietsanpham');
//     Route::get('/gioi-thieu', [KyanhController::class, 'gioithieu'])->name('posts.gioithieu');
//     Route::get('/lien-he', [KyanhController::class, 'lienhe'])->name('posts.lienhe');

// }

Route::domain('d3.ivinh.com')->group(function () {
    Route::get('/', [KyanhController::class, 'trangchu'])->name('posts.home');
    Route::get('/trang-chu', [KyanhController::class, 'trangchu'])->name('posts.home');
    Route::get('/san-pham', [KyanhController::class, 'sanpham'])->name('posts.sanpham');
    Route::get('/chi-tiet-san-pham', [KyanhController::class, 'chitietsanpham'])->name('posts.chitietsanpham');
    Route::get('/gioi-thieu', [KyanhController::class, 'gioithieu'])->name('posts.gioithieu');
    Route::get('/lien-he', [KyanhController::class, 'lienhe'])->name('posts.lienhe');
});

if (env('DB_DATABASE') == 'banhchungthanhduyen') {

    Route::get('/', [KyanhController::class, 'trangchu'])->name('posts.home');
    Route::get('/trang-chu', [KyanhController::class, 'trangchu'])->name('posts.home');
    Route::get('/san-pham', [KyanhController::class, 'sanpham'])->name('posts.sanpham');
    Route::get('/chi-tiet-san-pham', [KyanhController::class, 'chitietsanpham'])->name('posts.chitietsanpham');
    Route::get('/gioi-thieu', [KyanhController::class, 'gioithieu'])->name('posts.gioithieu');
    Route::get('/lien-he', [KyanhController::class, 'lienhe'])->name('posts.lienhe');
} elseif (env('DB_DATABASE') == 'matong') {
    Route::get('/trang-chu', [PostController::class, 'trangchu'])->name('matong.posts.home');
    Route::get('/', [PostController::class, 'trangchu'])->name('matong.posts.home');
    Route::get('/san-pham', [PostController::class, 'sanpham'])->name('matong.posts.sanpham');
    Route::get('/gioi-thieu', [PostController::class, 'gioithieu'])->name('matong.posts.gioithieu');
    Route::get('/lien-he', [PostController::class, 'lienhe'])->name('matong.posts.lienhe');
    Route::get('/chi-tiet-san-pham/{slug}', [PostController::class, 'chitietsanpham'])->name('posts.chitietsanpham');
} elseif (env('DB_DATABASE') == 'oibinhmap') {
    Route::get('/trang-chu', [OiBinhMapController::class, 'trangchu'])->name('oibinhmap.posts.home');
    Route::get('/', [OiBinhMapController::class, 'trangchu'])->name('oibinhmap.posts.home');
    Route::get('/san-pham', [OiBinhMapController::class, 'sanpham'])->name('oibinhmap.posts.sanpham');
    Route::get('/gioi-thieu', [OiBinhMapController::class, 'gioithieu'])->name('oibinhmap.posts.gioithieu');
    Route::get('/lien-he', [OiBinhMapController::class, 'lienhe'])->name('oibinhmap.posts.lienhe');
    Route::get('/chi-tiet-san-pham/{slug}', [OiBinhMapController::class, 'chitietsanpham'])->name('posts.chitietsanpham');
} elseif (env('DB_DATABASE') == 'botnghe') {
    Route::get('/trang-chu', [BotngheController::class, 'trangchu'])->name('botnghe.posts.home');
    Route::get('/', [BotngheController::class, 'trangchu'])->name('botnghe.posts.home');
    Route::get('/san-pham', [BotngheController::class, 'sanpham'])->name('botnghe.posts.sanpham');
    Route::get('/gioi-thieu', [BotngheController::class, 'gioithieu'])->name('botnghe.posts.gioithieu');
    Route::get('/lien-he', [BotngheController::class, 'lienhe'])->name('botnghe.posts.lienhe');
    Route::get('/chi-tiet-san-pham/{slug}', [BotngheController::class, 'chitietsanpham'])->name('botnghe.posts.chitietsanpham');
    Route::get('/chi-tiet-tin-tuc/{slug}', [BotngheController::class, 'chitietbaiviet'])->name('botnghe.posts.chitietbaiviet');
} elseif (env('DB_DATABASE') == 'luonkhoimy') {
    Route::get('/trang-chu', [LuonKhoiMyController::class, 'trangchu'])->name('botnghe.posts.home');
    Route::get('/', [LuonKhoiMyController::class, 'trangchu'])->name('botnghe.posts.home');
    Route::get('/san-pham', [LuonKhoiMyController::class, 'sanpham'])->name('botnghe.posts.sanpham');
    Route::get('/gioi-thieu', [LuonKhoiMyController::class, 'gioithieu'])->name('botnghe.posts.gioithieu');
    Route::get('/lien-he', [LuonKhoiMyController::class, 'lienhe'])->name('botnghe.posts.lienhe');
    Route::get('/chi-tiet-san-pham', [LuonKhoiMyController::class, 'chitietsanpham'])->name('botnghe.posts.chitietsanpham');
    Route::get('/chi-tiet-tin-tuc', [LuonKhoiMyController::class, 'chitietbaiviet'])->name('botnghe.posts.chitietbaiviet');
}

//gà 
elseif (env('DB_DATABASE') == 'hhh') {
    Route::get('/trang-chu', [GaSachSonKyController::class, 'trangchu'])->name('gasonky.posts.home');
    Route::get('/', [GaSachSonKyController::class, 'trangchu'])->name('gasonky.posts.home');
    Route::get('/san-pham', [GaSachSonKyController::class, 'sanpham'])->name('gasonky.posts.sanpham');
    Route::get('/chi-tiet-san-pham', [GaSachSonKyController::class, 'chitietsanpham'])->name('gasonky.posts.chitietsanpham');
    Route::get('/chi-tiet-tin-tuc', [GaSachSonKyController::class, 'chitiettintuc'])->name('gasonky.posts.chitietbaiviet');
    Route::get('/gioi-thieu', [GaSachSonKyController::class, 'gioithieu'])->name('gasonky.posts.gioithieu');
    Route::get('/lien-he', [GaSachSonKyController::class, 'lienhe'])->name('gasonky.posts.lienhe');
    Route::get('/tin-tuc', [GaSachSonKyController::class, 'tintuc'])->name('gasonky.posts.tintuc');
}






// elseif (env('DB_DATABASE') == 'ga') {
//         Route::get('/trang-chu',[thoitrangController::class, 'trangchu'])->name('thoitrang.posts.home');
//     Route::get('/', [thoitrangController::class, 'trangchu'])->name('thoitrang.posts.home');
//     Route::get('/san-pham',[thoitrangController::class, 'trangchu'])->name('thoitrang.posts.sanpham');
//     Route::get('/chi-tiet-san-pham',[thoitrangController::class, 'trangchu'])->name('thoitrang.posts.chitietsanpham');
//     Route::get('/chi-tiet-tin-tuc', [thoitrangController::class, 'trangchu'])->name('thoitrang.posts.chitietbaiviet');
//     Route::get('/gioi-thieu',[thoitrangController::class, 'trangchu'])->name('thoitrang.posts.gioithieu');
//     Route::get('/lien-he',[thoitrangController::class, 'trangchu'])->name('thoitrang.posts.lienhe');


// }




//--------------------------------------------------------------------

// elseif (env('DB_DATABASE') == 'thucphamquanbeo') {
//     Route::get('/trang-chu', ThucphamQuanbeoController::class, 'trangchu')->name('thucphamquanbeo.posts.home');
//     Route::get('/', ThucphamQuanbeoController::class, 'trangchu')->name('thucphamquanbeo.posts.home');
//     Route::get('/san-pham', ThucphamQuanbeoController::class, 'trangchu')->name('thucphamquanbeo.posts.sanpham');
//     Route::get('/chi-tiet-san-pham', ThucphamQuanbeoController::class, 'trangchu')->name('thucphamquanbeo.posts.chitietsanpham');
//     Route::get('/chi-tiet-tin-tuc', ThucphamQuanbeoController::class, 'trangchu')->name('thucphamquanbeo.posts.chitietbaiviet');
//     Route::get('/gioi-thieu', ThucphamQuanbeoController::class, 'trangchu')->name('thucphamquanbeo.posts.gioithieu');
//     Route::get('/lien-he', ThucphamQuanbeoController::class, 'trangchu')->name('thucphamquanbeo.posts.lienhe');
// }

//--------------------------------------------------------------------


// elseif (env('DB_DATABASE') == 'gasachsonky') {
//     Route::get('/trang-chu', [GaSachSonKyController::class, 'trangchu'])->name('gasonkyposts.home');
//     Route::get('/', [GaSachSonKyController::class, 'trangchu'])->name('gasonkyposts.home');
//     Route::get('/san-pham', [GaSachSonKyController::class, 'sanpham'])->name('gasonkyposts.sanpham');
//     Route::get('/gioi-thieu', [GaSachSonKyController::class, 'gioithieu'])->name('gasonkyposts.gioithieu');
//     Route::get('/lien-he', [GaSachSonKyController::class, 'lienhe'])->name('gasonkyposts.lienhe');
//     Route::get('/chi-tiet-san-pham/{slug}', [GaSachSonKyController::class, 'chitietsanpham'])->name('gasonkyposts.chitietsanpham');
//     Route::get('/chi-tiet-tin-tuc/{slug}', [GaSachSonKyController::class, 'chitietbaiviet'])->name('gasonkyposts.chitietbaiviet');

// } 
elseif (env('DB_DATABASE') == 'thucphamquabeo') {
    Route::get('/trang-chu', [ThucphamQuanbeoController::class, 'trangchu'])->name('thucphamquanbeo.posts.home');
    Route::get('/', [ThucphamQuanbeoController::class, 'trangchu'])->name('thucphamquanbeo.posts.home');
    Route::get('/san-pham', [ThucphamQuanbeoController::class, 'sanpham'])->name('thucphamquanbeo.posts.sanpham');
    Route::get('/gioi-thieu', [ThucphamQuanbeoController::class, 'gioithieu'])->name('thucphamquanbeo.posts.gioithieu');
    Route::get('/lien-he', [ThucphamQuanbeoController::class, 'lienhe'])->name('thucphamquanbeo.posts.lienhe');
    Route::get('/chi-tiet-san-pham/{slug}', [ThucphamQuanbeoController::class, 'chitietsanpham'])->name('thucphamquanbeo.posts.chitietsanpham');
    Route::get('/chi-tiet-tin-tuc/{slug}', [ThucphamQuanbeoController::class, 'chitietbaiviet'])->name('thucphamquanbeo.posts.chitietbaiviet');
} elseif (env('DB_DATABASE') == 'congtythucpham') {

    Route::get('/trang-chu', [ThucphamquangtrangController::class, 'trangchu'])->name('thucphamquangtrang.posts.home');
    Route::get('/', [ThucphamquangtrangController::class, 'trangchu'])->name('thucphamquangtrang.posts.home');
    Route::get('/san-pham', [ThucphamquangtrangController::class, 'sanpham'])->name('thucphamquangtrang.posts.sanpham');
    Route::get('/gioi-thieu', [ThucphamquangtrangController::class, 'gioithieu'])->name('thucphamquangtrang.posts.gioithieu');
    Route::get('/lien-he', [ThucphamquangtrangController::class, 'lienhe'])->name('thucphamquangtrang.posts.lienhe');
    Route::get('/chi-tiet-san-pham/{slug}', [ThucphamquangtrangController::class, 'chitietsanpham'])->name('thucphamquangtrang.posts.chitietsanpham');
    Route::get('/chi-tiet-tin-tuc/{slug}', [ThucphamquangtrangController::class, 'chitietbaiviet'])->name('thucphamquangtrang.posts.chitietbaiviet');
    Route::get('/chi-tiet-video/{slug}', [ThucphamquangtrangController::class, 'chitietvideo'])->name('thucphamquangtrang.posts.chitietvideo');
    Route::get('/cau-chuyen-san-pham', [ThucphamquangtrangController::class, 'cauchuyensanpham'])->name('thucphamquangtrang.posts.cauchuyensanpham');
} elseif (env('DB_DATABASE') == 'lonrunglaikyson') {
    Route::get('/trang-chu', [LonrunglaikysonController::class, 'trangchu'])->name('lonrunglaikyson.posts.home');
    Route::get('/', [LonrunglaikysonController::class, 'trangchu'])->name('lonrunglaikyson.posts.home');
    Route::get('/san-pham', [LonrunglaikysonController::class, 'sanpham'])->name('lonrunglaikyson.posts.sanpham');
    Route::get('/gioi-thieu', [LonrunglaikysonController::class, 'gioithieu'])->name('lonrunglaikyson.posts.gioithieu');
    Route::get('/lien-he', [LonrunglaikysonController::class, 'lienhe'])->name('lonrunglaikyson.posts.lienhe');
    Route::get('/chi-tiet-san-pham/{slug}', [LonrunglaikysonController::class, 'chitietsanpham'])->name('lonrunglaikyson.posts.chitietsanpham');
    Route::get('/chi-tiet-tin-tuc/{slug}', [LonrunglaikysonController::class, 'chitietbaiviet'])->name('lonrunglaikyson.posts.chitietbaiviet');
    Route::get('/cau-chuyen-san-pham', [LonrunglaikysonController::class, 'cauchuyensanpham'])->name('lonrunglaikyson.posts.cauchuyensanpham');
}

//
elseif (env('DB_DATABASE') == 'ocbuouden') {
    Route::get('/trang-chu', [OcbuoudenController::class, 'trangchu'])->name('ocbuouden.posts.home');
    Route::get('/', [OcbuoudenController::class, 'trangchu'])->name('ocbuouden.posts.home');
    Route::get('/san-pham', [OcbuoudenController::class, 'sanpham'])->name('ocbuouden.posts.sanpham');
    Route::get('/gioi-thieu', [OcbuoudenController::class, 'gioithieu'])->name('ocbuouden.posts.gioithieu');
    Route::get('/cau-chuyen-san-pham', [OcbuoudenController::class, 'cauchuyensanpham'])->name('ocbuouden.posts.cauchuyensanpham');
    Route::get('/lien-he', [OcbuoudenController::class, 'lienhe'])->name('ocbuouden.posts.lienhe');
    Route::get('/chi-tiet-san-pham/{slug}', [OcbuoudenController::class, 'chitietsanpham'])->name('ocbuouden.posts.chitietsanpham');
    Route::get('/chi-tiet-tin-tuc/{slug}', [OcbuoudenController::class, 'chitiettintuc'])->name('ocbuouden.posts.chitiettintuc');
    Route::get('/cau-chuyen-san-pham', [OcbuoudenController::class, 'cauchuyensanpham'])->name('ocbuouden.posts.cauchuyensanpham');
}


Route::get('/', [BaotangController::class, 'trangchu'])->name('baotangxoviet.posts.home');
Route::get('/chi-tiet-bai-viet/{slug}', [BaotangController::class, 'chitietbaiviet'])->name('baotangxoviet.posts.chitietbaiviet');
Route::get('/lien-he', [BaotangController::class, 'lienhe'])->name('baotangxoviet.posts.lienhe');
Route::post('/lien-he', [BaotangController::class, 'lienhes'])->name('baotangxoviet.posts.lienhe');
Route::get('/cau-hoi-thuong-gap', [BaotangController::class, 'question'])->name('baotangxoviet.posts.lienhe');
Route::get('/thu-vien-anh', [BaotangController::class, 'thuvienanh'])->name('baotangxoviet.posts.thuvienanh');
Route::get('/bai-viet/{slug}', [BaotangController::class, 'baiviet'])->name('baotangxoviet.posts.baiviet');
Route::get('/ho-so-chien-sy', [BaotangController::class, 'hosochiensy'])->name('baotangxoviet.posts.hosochiensy');
Route::get('/videos', [BaotangController::class, 'videos'])->name('baotangxoviet.posts.videos');
Route::get('/danh-muc/{slug}', [BaotangController::class, 'danhmuc'])->name('danhmuc');

Route::get('/tim-kiem', [BaotangController::class, 'timkiem'])->name('baotangxoviet.posts.searchpost');
Route::get('/ajax-title/{name}', [BaotangController::class, 'timkiemtitle'])->name('liendoan.timkiemtitle');

Route::get('/post-child/{danhmuc}', [BaotangController::class, 'postFromMenu'])->name('baotangxoviet.posts.post_child');

// Crawler Data 

Route::get('/craw-data', [CrawlerController::class, 'index'])->name('baotangxoviet.posts.post_child');







