<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::insert([
            [
                'name' => 'GIỚI THIỆU',
                'slug' => 'gioi-thieu',
                'parent_id' => null,
                'loaibv_id' => '1',
                
            ],
            [
                'name' => 'SẢN PHẨM',
                'slug' => 'san-pham',
                'parent_id' => null,
                'loaibv_id' => '1',
            ],
            [
                'name' => 'CÔNG TRÌNH',
                'slug' => 'cong-trinh',
                'parent_id' => null,
                'loaibv_id' => '1',
            ],
            [
                'name' => 'MÀN HÌNH CHO THUÊ',
                'slug' => 'man-hinh-cho-thue',
                'parent_id' => null,
                'loaibv_id' => '1',
            ],
            [
                'name' => 'TƯ VẤN',
                'slug' => 'tu-van',
                'parent_id' => null,
                'loaibv_id' => '1',
            ],
            [
                'name' => 'TIN TỨC',
                'slug' => 'tin-tuc',
                'parent_id' => null,
                'loaibv_id' => '1',
            ],
            [
                'name' => 'LIÊN HỆ',
                'slug' => 'lien-he',
                'parent_id' => null,
                'loaibv_id' => '1',
            ],
            // 
            [
                'name' => 'Màn hình LED',
                'slug' => 'man-hinh-led',
                'parent_id' => '2',
                'loaibv_id' => '2',
            ],
            [
                'name' => 'LED trang trí HHX',
                'slug' => 'led-trang-tri-hhx',
                'parent_id' => '2',
                'loaibv_id' => '2',
            ],
            [
                'name' => 'Bộ xử lý hình ảnh VDWALL',
                'slug' => 'bo-xu-ly-hinh-anh-vdwall',
                'parent_id' => '2',
                'loaibv_id' => '2',
            ],
            [
                'name' => 'Màn hình quảng cáo LCD',
                'slug' => 'man-hinh-quang-cao-lcd',
                'parent_id' => '2',
                'loaibv_id' => '2',
            ],
            [
                'name' => 'Màn hình LED cho thuê',
                'slug' => 'man-hinh-led-cho-thue',
                'parent_id' => '2',
                'loaibv_id' => '2',
            ],
            [
                'name' => 'Máy in văn phòng',
                'slug' => 'may-in-van-phong',
                'parent_id' => '2',
                'loaibv_id' => '2',
            ],
            [
                'name' => 'Công trình lắp đặt LED trang trí',
                'slug' => 'cong-trinh-lap-dat-led-trang-tri',
                'parent_id' => '3',
                'loaibv_id' => '3',
            ],
            [
                'name' => 'Công trình lắp đặt màn hình LED',
                'slug' => 'cong-trinh-lap-dat-man-hinh-led',
                'parent_id' => '3',
                'loaibv_id' => '3',
            ],
            [
                'name' => 'Tin tức mới nhất',
                'slug' => 'tin-tuc-moi-nhat',
                'parent_id' => '6',
                'loaibv_id' => '3',
            ],
           
        ]);

    }

    
}
