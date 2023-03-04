<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class VariantSeeder extends Seeder
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
                'monitor' => 'IPS LCD, 6.1", Liquid Retina',
                'operating' => 'iOS 15',
                'camera_behind' => '2 camera 12 MP',
                'camera_front' => '12 MP',
                'chip' => 'Apple A13 Bionic',
                'ram' => 4,
                'storage' => 128,
                'sim' => '1 Nano SIM & 1 eSIM, Hỗ trợ 4G',
                'battery' => '3110 mAh, 18 W',
                'product_id' => '1',
            ],
        ];
        DB::table('variants')->insert($data);
    }
}
