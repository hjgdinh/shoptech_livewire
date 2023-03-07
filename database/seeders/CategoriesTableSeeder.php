<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '1',
                'parent_id' => '0',
                'name' => 'Điện thoại',
                'slug' => 'dien-thoai',
                'image' => 'deflaut/phone.jpg',
            ],
            [
                'id' => '2',
                'parent_id' => '0',
                'name' => 'Laptop',
                'slug' => 'laptop',
                'image' => 'deflaut/laptop.png',
            ],
            [
                'id' => '3',
                'parent_id' => '1',
                'name' => 'Samsung',
                'slug' => 'samsumg',
                'image' => 'deflaut/samsumg.png',
            ],
            [
                'id' => '4',
                'parent_id' => '1',
                'name' => 'Iphone',
                'slug' => 'iphone',
                'image' => 'deflaut/iphone.jpg',
            ],
            [
                'id' => '5',
                'parent_id' => '1',
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
                'image' => 'deflaut/xiaomi.png',
            ],
            [
                'id' => '6',
                'parent_id' => '2',
                'name' => 'Dell',
                'slug' => 'dell',
                'image' => 'deflaut/dell.png',
            ],
            [
                'id' => '7',
                'parent_id' => '2',
                'name' => 'Asus',
                'slug' => 'asus',
                'image' => 'deflaut/asus.jpg',
            ],
            [
                'id' => '8',
                'parent_id' => '2',
                'name' => 'Apple',
                'slug' => 'apple',
                'image' => 'deflaut/apple.png',
            ],
            [
                'id' => '9',
                'parent_id' => '0',
                'name' => 'Phụ kiện',
                'slug' => 'phu-kien',
                'image' => 'deflaut/accsory.jpg',
            ],
            [
                'id' => '10',
                'parent_id' => '9',
                'name' => 'Tai nghe',
                'slug' => 'tai-nghe',
                'image' => 'deflaut/earphone.png',
            ],
        ];
        DB::table('categories')->insert($data);
    }
}
