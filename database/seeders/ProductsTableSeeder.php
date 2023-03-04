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
                'name' => 'iPhone 11 128GB',
                'slug' => 'iphone-11-128gb',
                'price' => '14490000',
                'description' => 'Được xem là một trong những phiên bản iPhone "giá rẻ" của bộ 3 iPhone 11 series nhưng iPhone 11 128GB vẫn sở hữu cho mình rất nhiều ưu điểm mà hiếm có một chiếc smartphone nào khác sở hữu.
                Nâng cấp mạnh mẽ về cụm camera
                Năm nay với iPhone 11 thì Apple đã nâng cấp khá nhiều về camera nếu so sánh với chiếc iPhone Xr 128GB năm ngoái.
                
                Điện thoại iPhone 11 128GB | Cụm camera kép phía sau
                
                Chúng ta đã có bộ đôi camera kép thay vì camera đơn như trên thế hệ cũ và với một camera góc siêu rộng thì bạn cũng có nhiều hơn những lựa chọn khi chụp hình.
                
                Điện thoại iPhone 11 128GB | Giao diện chụp ảnh
                
                Trước đây để lấy được hết kiến trúc của một tòa nhà, để ghi lại hết sự hùng vĩ của một ngọn núi thì không còn cách nào khác là bạn phải di chuyển ra khá xa để chụp.
                
                Điện thoại iPhone 11 128GB | Ảnh chụp góc siêu rộng
                
                Ảnh chụp chế độ góc siêu rộng
                
                Nhưng với góc siêu rộng trên iPhone 11 thì có thể cho bạn những bức ảnh với hiệu ứng góc rộng rất ấn tượng và thích mắt.
                
                Điện thoại iPhone 11 128GB | Ảnh chụp chế độ chân dung
                
                Ảnh camera chế độ chân dung
                
                Bên cạnh đó là tính năng Deep Fusion được quảng cáo là cơ chế chụp hình mới, đem lại hình ảnh với độ chi tiết cao, dải tần nhạy sáng rộng và rất ít bị nhiễu.
                
                Điện thoại iPhone 11 128GB | Ảnh chụp đủ sáng          
                
                Màu sắc mới trên chiếc iPhone này hứa hẹn cũng sẽ khiến người dùng phải mê mệt và muốn bỏ tiền ra sở hữu ngay và luôn một chiếc.',
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
                'description' => 'oke tot',
                'category_id' => 6
            ],
            [
                'id' => '4',
                'name' => 'Iphone 10',
                'slug' => 'iphone-10',
                'price' => '300',
                'description' => 'oke tot',
                'category_id' => 4
            ],
            [
                'id' => '5',
                'name' => 'Samsung J9',
                'slug' => 'samsung-j9',
                'price' => '100',
                'description' => 'oke tot',
                'category_id' => 3
            ],
            [
                'id' => '6',
                'name' => 'Iphone 13',
                'slug' => 'iphone-13',
                'price' => '300',
                'description' => 'oke tot',
                'category_id' => 4
            ],
        ];
        DB::table('products')->insert($data);
    }
}
