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
                'cpu' => null,
                'drive' => null,
                'graphic' => null,
                'connector' => null,
                'design' => null,
                'size' => null,
                'release_time' => null,
                'product_id' => '1',
            ],
            [
                'id' => '2',
                'monitor' => 'OLED, 6.7", Super Retina XDR',
                'operating' => 'iOS 15',
                'camera_behind' => '3 camera 12 MP',
                'camera_front' => '12 MP',
                'chip' => 'Apple A15 Bionic',
                'ram' => 6,
                'storage' => 256,
                'sim' => '1 Nano SIM & 1 eSIM, Hỗ trợ 5G',
                'battery' => '4352 mAh, 20 W',
                'cpu' => null,
                'drive' => null,
                'graphic' => null,
                'connector' => null,
                'design' => null,
                'size' => null,
                'release_time' => null,
                'product_id' => '2',
            ],
            [
                'id' => '3',
                'monitor' => 'OLED, 6.1", Super Retina XDR',
                'operating' => 'iOS 15',
                'camera_behind' => '2 camera 12 MP',
                'camera_front' => '12 MP',
                'chip' => 'Apple A14 Bionic',
                'ram' => 4,
                'storage' => 256,
                'sim' => '1 Nano SIM & 1 eSIM, Hỗ trợ 5G',
                'battery' => '2815 mAh, 20 W',
                'cpu' => null,
                'drive' => null,
                'graphic' => null,
                'connector' => null,
                'design' => null,
                'size' => null,
                'release_time' => null,
                'product_id' => '3',
            ],
            [
                'id' => '4',
                'monitor' => '15.6", Full HD (1920 x 1080)',
                'operating' => 'Windows 11 Home SL + Office Home & Student vĩnh viễn',
                'ram' => '8 GB, DDR4 2 khe (1 khe 8 GB + 1 khe rời), 3200 MHz',
                'cpu' => 'i5, 1135G7, 2.4GHz',
                'drive' => '512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2 TB (2280) / 1 TB (2230)),Hỗ trợ khe cắm HDD SATA (nâng cấp tối đa 2 TB)',
                'graphic' => 'Card rời, MX350 2GB',
                'connector' => 'HDMI, LAN (RJ45), USB 2.0, Jack tai nghe 3.5 mm, 2 x USB 3.2 / 1 x USB 3.2 và 1 x USB Type-C (Tuỳ thuộc vào lô hàng)',
                'design' => 'Vỏ nhựa',
                'size' => 'Dài 358.5 mm - Rộng 235.5 mm - Dày 18.9 mm - Nặng 1.69 kg',
                'release_time' => '2021',
                'camera_behind' => null,
                'camera_front' => null,
                'chip' => null,
                'storage' => null,
                'sim' => null,
                'battery' => null,
                'product_id' => '4',
            ],
            [
                'id' => '5',
                'monitor' => '14", Full HD (1920 x 1080)',
                'ram' => '8 GB, DDR4 2 khe (1 khe 8 GB + 1 khe rời), 3200 MHz',
                'operating' => 'Windows 11 Home SL + Office Home & Student vĩnh viễn',
                'cpu' => 'i5, 11320H, 3.2GHz',
                'drive' => '512 GB SSD NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 1 TB)',
                'graphic' => 'Card tích hợp, Intel Iris Xe',
                'connector' => 'HDMI, LAN (RJ45), USB Type-C, Jack tai nghe 3.5 mm, 2 x USB 3.2',
                'design' => 'Vỏ nhựa - nắp lưng bằng kim loại',
                'size' => 'Dài 321.2 mm - Rộng 212.8 mm - Dày 17.9 mm - Nặng 1.44 kg',
                'release_time' => '2021',
                'camera_behind' => null,
                'camera_front' => null,
                'chip' => null,
                'storage' => null,
                'sim' => null,
                'battery' => null,
                'product_id' => '5',
            ],
            [
                'id' => '6',
                'monitor' => 'Dùng 6 giờ',
                'ram' => 'Dùng 30 giờ',
                'operating' => 'Lightning, Sạc MagSafe, Sạc không dây Qi',
                'cpu' => 'Adaptive EQ, Active Noise Cancellation, Chip Apple H2',
                'drive' => 'Android, iOS, Windows',
                'graphic' => 'Chống nước IPX4, Sạc không dây, Có mic thoại, Sạc nhanh, Chống ồn chủ động ANC, Trợ lý ảo Siri',
                'connector' => 'Bluetooth 5.3',
                'design' => 'Cảm ứng chạm',
                'size' => 'Apple',
                'release_time' => null,
                'camera_behind' => null,
                'camera_front' => null,
                'chip' => null,
                'storage' => null,
                'sim' => null,
                'battery' => null,
                'product_id' => '6',
            ],
        ];
        DB::table('variants')->insert($data);
    }
}
