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
            ],
            [
                'id' => '2',
                'parent_id' => '0',
                'name' => 'Laptop',
                'slug' => 'laptop',
            ],
            [
                'id' => '3',
                'parent_id' => '1',
                'name' => 'Samsung',
                'slug' => 'samsumg',
            ],
            [
                'id' => '4',
                'parent_id' => '1',
                'name' => 'Iphone',
                'slug' => 'iphone',
            ],
            [
                'id' => '5',
                'parent_id' => '1',
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
            ],
            [
                'id' => '6',
                'parent_id' => '2',
                'name' => 'Dell',
                'slug' => 'dell',
            ],
            [
                'id' => '7',
                'parent_id' => '2',
                'name' => 'Asus',
                'slug' => 'asus',
            ],
            [
                'id' => '8',
                'parent_id' => '2',
                'name' => 'Apple',
                'slug' => 'apple',
            ],
            [
                'id' => '9',
                'parent_id' => '0',
                'name' => 'Phụ kiện',
                'slug' => 'phu-kien',
            ],
            [
                'id' => '10',
                'parent_id' => '9',
                'name' => 'Tai nghe Apple',
                'slug' => 'tai-nghe-apple',
            ],
        ];
        DB::table('categories')->insert($data);
    }
}
