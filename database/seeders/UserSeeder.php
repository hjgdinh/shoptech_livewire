<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    // public function run()
    // {
    //     DB::table('users')->insert([
    //         'full_name' => Str::random(5),
    //         'phone' => '0398039307',
    //         'gender' => '1' || '2',
    //         'address' => Str::random(5),
    //         'email' => 'admin1@gmail.com',
    //         'password' => Hash::make('admin'),
    //         'role_id' => '2',
    //     ]);
    // }
    public function run()
    {
        //
         $data = [
            [
                'name' => Str::random(5),
                'phone' => '0398039307',
                'gender' => '1' || '2',
                'address' => Str::random(5),               
                'utype' => 'USR',
                'email' => 'lxc150896@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => Str::random(5),
                'phone' => '0398039307',
                'gender' => '1' || '2',
                'address' => Str::random(5),               
                'utype' => 'USR',
                'email' => 'lxc@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => Str::random(5),
                'phone' => '0398039307',
                'gender' => '1' || '2',
                'address' => Str::random(5),               
                'utype' => 'USR',
                'email' => 'abc@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => Str::random(5),
                'phone' => '0398039307',
                'gender' => '1' || '2',
                'address' => Str::random(5),               
                'utype' => 'ADM',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345'),
            ],
            [
                'name' => Str::random(5),
                'phone' => '0398039307',
                'gender' => '1' || '2',
                'address' => Str::random(5),               
                'utype' => 'USR',
                'email' => 'ndh@gmail.com',
                'password' => bcrypt('12345'),
            ],
        ];
        DB::table('users')->insert($data);
    }
}
