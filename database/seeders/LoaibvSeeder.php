<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LoaibvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Loaibv::insert([
            [
                'name' => 'baiviet',
            ],
            [
                'name' => 'sanpham',
            ],
            [
                'name' => 'danhmuc',
            ],
        ]);    
    }
}
