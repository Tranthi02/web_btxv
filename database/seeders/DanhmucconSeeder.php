<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DanhmucconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        \App\Models\Danhmuccon::insert([
            [
                'tendm' => 'Màn hình LED',
                'slug' => 'man-hinh-led',
                'danhmuc_id' => '2',
                'loaibv_id' => '1',
            ],
            [
                'tendm' => 'LED trang trí HHX',
                'slug' => 'led-trang-tri-hhx',
                'danhmuc_id' => '2',
                'loaibv_id' => '1',
            ],
            [
                'tendm' => 'Bộ xử lý hình ảnh VDWALL',
                'slug' => 'bo-xu-ly-hinh-anh-vdwall',
                'danhmuc_id' => '2',
                'loaibv_id' => '1',
            ],
            [
                'tendm' => 'Màn hình quảng cáo LCD',
                'slug' => 'man-hinh-quang-cao-lcd',
                'danhmuc_id' => '2',
                'loaibv_id' => '1',
            ],
            [
                'tendm' => 'Màn hình LED cho thuê',
                'slug' => 'man-hinh-led-cho-thue',
                'danhmuc_id' => '2',
                'loaibv_id' => '1',
            ],
            [
                'tendm' => 'Máy in văn phòng',
                'slug' => 'may-in-van-phong',
                'danhmuc_id' => '2',
                'loaibv_id' => '1',
            ],
            [
                'tendm' => 'Công trình lắp đặt LED trang trí',
                'slug' => 'cong-trinh-lap-dat-led-trang-tri',
                'danhmuc_id' => '3',
                'loaibv_id' => '2',
            ],
            [
                'tendm' => 'Công trình lắp đặt màn hình LED',
                'slug' => 'cong-trinh-lap-dat-man-hinh-led',
                'danhmuc_id' => '3',
                'loaibv_id' => '2',
            ],
            [
                'tendm' => 'Tin tức mới nhất',
                'slug' => 'tin-tuc-moi-nhat',
                'danhmuc_id' => '6',
                'loaibv_id' => '2',
            ],
        ]);
    }

    
}
