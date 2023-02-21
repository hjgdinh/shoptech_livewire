<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
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
                'name' => 'Iphone 11',  
                'slug' => 'iphone-11',  
                'price' => '100',    
                'description' => 'oke tot' ,
                'category_id' => 4                           
            ],
            [
                'id' => '2',
                'name' => 'Dell M4700', 
                'slug' => 'dell-m4700',  
                'price' => '200',
                'description' => 'oke dung duoc',
                'category_id' => 6                           
            ],
            [
                'id' => '3',
                'name' => 'Dell M4900', 
                'slug' => 'dell-m4900',  
                'price' => '100',    
                'description' => 'oke tot' ,
                'category_id' => 6                           
            ],
            [
                'id' => '4',
                'name' => 'Iphone 10',
                'slug' => 'iphone-10',  
                'price' => '300',    
                'description' => 'oke tot' ,
                'category_id' => 4                           
            ],
            [
                'id' => '5',
                'name' => 'Samsung J9',  
                'slug' => 'samsung-j9',  
                'price' => '100',    
                'description' => 'oke tot' ,
                'category_id' => 3                          
            ],
            [
                'id' => '6',
                'name' => 'Iphone 13',  
                'slug' => 'iphone-13',  
                'price' => '300',    
                'description' => 'oke tot' ,
                'category_id' => 4                           
            ],
        ];
        DB::table('products')->insert($data);
    }
}
