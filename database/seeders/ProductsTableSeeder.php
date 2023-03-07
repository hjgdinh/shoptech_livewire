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
                'image' => '["products/iphone-11-1.png","products/iphone-11.png"]',
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
                'name' => 'iPhone 13 256GB',
                'slug' => 'iphone-13-256gb',
                'price' => '31490000',
                'image' => '["products/iphone-13-4.jpg","products/iphone-13-1.jpg","products/iphone-13-3.jpg","products/iphone-13-2.jpg"]',
                'description' => 'iPhone 13 Pro Max 1 TB thuộc phân khúc điện thoại cao cấp mà không một iFan nào có thể bỏ qua, với màn hình lớn sắc nét, cấu hình vượt trội, dung lượng lưu trữ "khủng", thời gian sử dụng dài, mỗi lần trải nghiệm đều cho bạn cảm giác thỏa mãn đáng ngạc nhiên.
                Apple A15 Bionic - cấu hình đột phá
                Để đảm bảo hiệu năng cho iPhone 13 Pro Max, nhà Táo sử dụng con chip Apple A15 Bionic được sản xuất theo tiến trình 5 nm cải tiến, số lượng bóng dẫn lên đến 15.8 nghìn tỷ cho năng lực tính toán và xử lý các tác vụ của điện thoại tăng mạnh. 
                
                Vi xử lý Apple A15 Bionic - iPhone 13 Pro Max 1TB
                
                CPU 6 lõi cho hiệu suất tăng 40%, GPU 5 lõi cho hiệu suất đồ họa nâng cao đến 80%, Neural Engine 16 lõi cũng hoạt động nhanh gấp 2 lần so với chip xử lý thế hệ trước đó, giúp các cảnh phim hiển thị rõ ràng, đồ họa trong game đẹp và mượt mà đồng thời cũng giúp tăng tuổi thọ cho pin tốt hơn. 
                
                Nếu như công việc của bạn đòi hỏi thiết bị có hiệu năng mạnh mẽ hơn thì cũng có thể tham khảo qua điện thoại iPhone 14 Pro Max, máy sở hữu bên trong con chip Apple A16 Bionic với hiệu năng cực khủng cùng khả năng tối ưu điện năng tiêu thụ.
                
                Đồ họa ấn tượng - iPhone 13 Pro Max 1TB
                
                Apple A15 Bionic còn nâng cao sự riêng tư cho người dùng khi đảm bảo những thứ như yêu cầu của bạn với Siri, tương tác với Live Text hoàn toàn bảo mật. 
                
                Tuy cập an toàn - iPhone 13 Pro Max 1TB
                
                Mặc khác, đi kèm RAM 6 GB cho việc đa nhiệm tốt hơn bên cạnh khả năng xử lý của máy. Thiết bị này hỗ trợ bộ nhớ trong 1 TB, bạn sẽ không còn bối rối với việc xóa bớt dữ liệu trong quá trình lưu trữ các tập tin, ứng dụng, video yêu thích của mình. 
                
                Dung lượng bộ nhớ - iPhone 13 Pro Max 1TB
                
                Tải xuống siêu nhanh cùng mạng 5G
                Công suất lớn và độ trễ thấp của mạng 5G trên iPhone 13 Pro Max phục vụ tốt cho nhu cầu trải nghiệm game online, phát trực tuyến, tải tài liệu chỉ trong tích tắc, chia sẻ video AR tiện lợi và nhanh chóng.
                
                Hỗ trợ kết nối 5G hiện đại - iPhone 13 Pro Max 1TB
                
                Đặc biệt để giảm thiểu việc tiêu hao pin smartphone tối đa, Apple còn hỗ trợ chế độ Dữ liệu thông minh (Smart Data Mode) tự động điều chỉnh để các ứng dụng chỉ dùng mạng 5G khi thực sự cần thiết.',
                'category_id' => 4
            ],
            [
                'id' => '3',
                'name' => 'iPhone 12 256GB ',
                'slug' => 'iphone-12-256gb',
                'image' => '["products/iphone-12-1.jpg","products/iphone-12-2.png","products/iphone-12-3.png","products/iphone-12-4.png"]',
                'price' => '18490000',
                'description' => 'Smartphone iPhone 12 256 GB được Apple cho ra mắt đã đem đến làn sóng mạnh mẽ đối với những ai yêu công nghệ nói chung và “fan hâm mộ” trung thành của điện thoại iPhone nói riêng, với con chip mạnh, dung lượng lưu trữ lớn cùng thiết kế toàn diện và khả năng hiển thị hình ảnh xuất sắc.
                Thiết kế hoàn thiện đến từng chi tiết
                Màn hình Super Retina XDR 6.1 inch sắc nét, màu sắc sống động, đem đến những hình ảnh chi tiết và chân thật.
                
                Màn hình chuẩn Super Rentina XDR | iPhone 12 256 GB
                
                Hoàn thiện bằng khung nhôm tái chế, thân thiện với môi trường, các góc cạnh vuông vức, ít bo tròn, iPhone 12 có kích thước nhỏ hơn so với iPhone 11 nhưng tạo cảm giác cứng cáp và mạnh mẽ hơn.
                
                Các góc cạnh trông vuông vức, cứng cáp hơn | iPhone 12 256 GB
                
                iPhone 12 sử dụng công nghệ kính cường lực mới, lần đầu được giới thiệu bởi Apple với tên gọi Ceramic Shield. Nhờ việc đưa các tinh thể sứ nano vào cấu trúc bên trong, qua đó giảm thiểu tác động của việc rơi vỡ gấp 4 lần, nâng cao độ bền của thiết bị.
                
                Màn hình trang bị kính Ceramic Shield | iPhone 12 256 GB
                
                Bên cạnh đó, Apple còn áp dụng quy trình trao đổi ion kép vào mặt sau của điện thoại giúp tăng cường khả năng chống xước.
                
                Thiết kế ở mặt lưng | iPhone 12 256 GB
                
                Thỏa thích lựa chọn màu sắc cá tính riêng cũng như sở thích của bạn với 5 gam màu năng động và thời thượng.
                
                Nhiều màu sắc cho bạn sự lựa chọn phù hợp | iPhone 12 256 GB
                
                Trang bị chipset mạnh mẽ nhất 2020
                iPhone 12 được trang bị con chip A14 Bionic sở hữu tốc độ xử lý lên đến 3.1 GHz, sản xuất trên tiến trình 5 nm, CPU gồm 6 nhân, với 4 nhân tiết kiệm pin và 2 nhân mạnh, nâng cao hiệu suất xử lý đồng thời duy trì hoạt động trong thời gian dài.
                
                Trang bị chipset mạnh nhất A14 Bionic | iPhone 12 256 GB
                
                Không thể không nhắc đến dung lượng bộ nhớ trong lên đến 256 GB, cùng khả năng mở rộng thêm 2 TB trên iCloud, phá vỡ mọi rào cản về lưu trữ dữ liệu trong thế giới smartphone.
                
                Khay sim | iPhone 12 256 GB
                
                Việc chụp ảnh camera và chơi game sẽ được nâng lên tầm cao mới, với hiệu suất xử lý hình ảnh hơn 80% so với phiên bản tiền nhiệm. Bên cạnh đó, nhờ bộ vi xử lý khủng này, cho phép thực hiện 11 ngàn tỷ phép tính trong mỗi giây, mang đến trải nghiệm mượt mà, không giật lag với hầu hết hoạt động của người dùng.',
                'category_id' => 4
            ],
            [
                'id' => '4',
                'name' => 'Dell Vostro 3510 i5 1135G7/8GB/512GB/2GB MX350/OfficeHS/Win11',
                'image' => '["products/dell-vostro-1.jpg","products/dell-vostro-2.jpg","products/dell-vostro-3.jpg","products/dell-vostro-4.jpg"]',
                'slug' => 'dell-vostro-3510-i5-p112f002bbl',
                'price' => '18990000',
                'description' => 'Laptop Dell Vostro 3510 i5 (P112F002BBL) sở hữu cấu hình mạnh mẽ, đa nhiệm mượt mà trên sức mạnh của bộ vi xử lý Intel thế hệ 11, cùng một thiết kế đơn giản mà sang đẹp, sẽ là lựa chọn đắt giá đáp ứng nhu cầu học tập, làm việc hay giải trí của bạn.
                Hiệu năng mạnh mẽ, ổn định
                Được trang bị dòng chip Intel Core i5 Tiger Lake 1135G7 mạnh mẽ, hoạt động trên xung nhịp cơ bản 2.4 GHz và ép xung lên đến 4.2 GHz ở chế độ Turbo Boost, Dell Vostro 3510 dễ dàng giải quyết mượt mà các tác vụ như soạn thảo hợp đồng trên Word, nhập liệu và thống kê qua Excel, tạo bảng thuyết trình cùng PowerPoint,... hay thiết kế đồ hoạ cơ bản trên các ứng dụng nhà Adobe cũng hiệu quả không kém.
                
                Sự hỗ trợ của bộ nhớ RAM 8 GB chuẩn DDR4 2 khe (1 khe 8 GB + 1 khe rời) với tốc độ Bus RAM lên đến 3200 MHz cho quá trình đa nhiệm trên laptop càng trơn tru, ổn định hơn, không gặp tình trạng giật lag máy, đơ màn hình. Máy cho phép nâng cấp RAM lên đến 16 GB để tăng sức mạnh cấu hình cho những tác vụ nặng.
                
                Bên cạnh đó, sức mạnh đồ họa từ card đồ họa rời NVIDIA GeForce MX350 2 GB cải tiến khả năng xử lý đồ họa thiết kế sản phẩm poster, banner,... ấn tượng cũng hiệu render video ngắn hiệu quả, từ đó giúp tăng trải nghiệm của người dùng, bạn cũng dễ dàng thử các tựa game nhẹ nhàng thịnh hành một cách mượt mà.
                
                Laptop SSD 512 GB NVMe PCIe (Có thể tháo ra, lắp thanh khác tối đa 2 TB (2280) / 1 TB (2230)) cho phép lưu trữ khá thoải mái dữ liệu cá nhân cho công việc, giải trí, hỗ trợ khởi động máy nhanh chóng, truy xuất dữ liệu ổn định. Khi cần mở rộng không gian lưu trữ, bạn cũng có thể dùng khe cắm HDD SATA (nâng cấp tối đa 2 TB).',
                'category_id' => 6
            ],
            [
                'id' => '5',
                'name' => 'Dell Vostro 5410 i5 11320H/8GB/512GB/Office H&S/Win11',
                'image' => '["products/dell-vostro-5410-1.jpg","products/dell-vostro-5410-2.jpg","products/dell-vostro-5410-3.jpg","products/dell-vostro-5410-4.jpg"]',
                'slug' => 'dell-vostro-5410-i5-v4i5214w1',
                'price' => '20490000',
                'description' => 'Sở hữu phong cách thiết kế thanh lịch, tinh tế cùng những thông số kỹ thuật khá ấn tượng cho đa dạng nhu cầu từ laptop học tập - văn phòng đến giải trí cơ bản, laptop Dell Vostro 5410 i5 (V4I5214W1) sẽ là một lựa chọn mang lại sự hài lòng cho bạn.
                Mượt mà đa tác vụ với con chip Intel Gen 11 ấn tượng
                Vận hành mượt mà mọi tác vụ từ cơ bản đến nâng cao nhờ sở hữu cấu trúc 4 nhân 8 luồng mạnh mẽ được trang bị trên bộ vi xử lý Intel Core i5 Tiger Lake 11320H, đạt tốc độ văn phòng cơ bản 3.20 GHz giải quyết nhẹ nhàng các công việc trên Word, Excel, PowerPoint,... và ép xung lên đến 4.5 GHz cho các nhu cầu giải trí đa dạng hơn từ lướt web, xem phim, nghe nhạc,... đến các phần mềm thiết kế đồ họa. 
                
                Hiệu suất đồ họa được cải thiện tương đối vượt trội với chất lượng hình ảnh rõ nét hơn, kết xuất lên đến 8K cho các tác phẩm nghệ thuật hoàn hảo nhờ card tích hợp Intel Iris Xe Graphics, các thao tác chỉnh sửa hình ảnh, biên tập video cơ bản trên những phần mềm đồ họa Photoshop, Illustrator, Figma,... trở nên chuyên nghiệp hơn hay lôi cuốn bạn vào những con game hấp dẫn có mức cài đặt 1080p 60 FPS. 
                
                Đa nhiệm ấn tượng hơn bao giờ hết khi cho phép bạn mở cùng lúc nhiều cửa sổ trình duyệt hay các ứng dụng khác nhau để phục vụ tối đa nhu cầu làm việc, nâng cao năng suất cũng như chất lượng của người dùng nhờ bộ nhớ RAM 8 GB chuẩn DDR4 2 khe (1 khe 8 GB + 1 khe rời) có tốc độ Bus RAM lên đến 3200 MHz, song song đó còn cung cấp khả năng nâng cấp RAM 32 GB cho phép bạn tải thêm nhiều tài liệu bổ ích mà không lo nặng máy.
                
                Dell Vostro 5410 i5 11320H (V4I5214W1) - Cấu hình
                
                Đáp ứng tốt các nhu cầu cá nhân của người dùng khi cho phép bạn tải nhiều tập tài liệu hữu ích hay các ứng dụng quan trọng mà không lo tốn kém quá nhiều dung lượng nhờ có không gian lưu trữ tương đối rộng rãi được trang bị trên ổ cứng SSD 512 GB NVMe PCIe (Có thể linh hoạt tháo ra và lắp thanh khác tối đa 1 TB), bên cạnh đó còn gia tăng tốc độ và thời gian mở máy chỉ trong vài giây đồng thời tiết kiệm nguồn điện năng đáng kể. 
                
                Dell Vostro 5410 i5 11320H (V4I5214W1) - SSD
                
                Ngoại hình tối giản, thời trang, mang tính di động cao
                Mang trên mình gam màu xám hiện đại cùng những đường nét máy tuy đơn giản nhưng lại vô cùng cuốn hút, giúp laptop Dell Vostro nổi bật hơn hẳn ở mọi không gian với lối thiết kế thanh lịch, tao nhã, phù hợp với mọi đối tượng người dùng dù là nam hay nữ. Dày 17.9 mm và khối lượng chỉ vỏn vẹn 1.44 kg cho phép người dùng đặt máy gọn gàng vào balo và di chuyển linh hoạt đến mọi nơi bạn muốn.  
                
                Dell Vostro 5410 i5 11320H (V4I5214W1) - Thiết kế
                
                Thiết diện phím tương đối rộng rãi cùng hành trình sâu và độ nhạy cao, mang đến trải nghiệm gõ máy êm tay và thuận tiện dù bạn có gõ với tốc độ nhanh nhưng vẫn không ảnh hưởng tiếng ồn đến những người xung quanh. Máy còn trang bị đèn nền bàn phím giúp các thao tác gõ được chuẩn xác hơn trên từng vị trí dù bạn làm việc trong môi trường thiếu sáng.  ',
                'category_id' => 6
            ],
            [
                'id' => '6',
                'name' => 'Bluetooth AirPods Pro (2nd Gen) MagSafe Charge Apple MQD83',
                'image' => '["products/airpods-pro-2nd-1.jpg","products/airpods-pro-2nd-2.jpg","products/airpods-pro-2nd-3.jpg"]',
                'slug' => 'tai-nghe-bluetooth-airpods-pro-2-magsafe-charge-apple-mqd83-trang',
                'price' => '6290000',
                'description' => 'Thiết kế tai nghe AirPods Pro 2 gọn nhẹ, kiểu dáng hiện đại
                Về phần thiết kế, nhà Apple vẫn giữ nguyên kiểu dáng quen thuộc của những phiên bản tiền nhiệm trước đó như: Thiết kế gọn nhẹ, đường bo góc tinh tế, gam màu trắng trang nhã bao bọc trọn vẹn tai nghe và hộp sạc.
                
                AirPods Pro 2 - Thiết kế gọn nhẹ, kiểu dáng thời thượng
                
                Trên hộp sạc sẽ bao gồm:
                
                - Đèn báo pin.
                
                - Cổng sạc Lightning.
                
                - Khoen nhỏ để móc dây treo.
                
                - Loa cảnh báo
                
                Ở phiên bản này, hộp sạc được trang bị thêm phần khoen để móc dây treo tiện lợi. Nhờ đó, bạn có thể dễ dàng treo vào balo và mang đi bất kỳ đâu mà không cần dùng tới túi đựng AirPods chuyên dụng. 
                
                Tai nghe Bluetooth AirPods Pro 2 MagSafe Charge Apple MQD83 Trắng - Khoen móc
                
                Loa tích hợp trên hộp sạc có thể phát âm thanh giúp bạn dễ dàng xác định vị trí khi vô tình đánh rơi và phát ra âm cảnh báo khi pin yếu hoặc quá trình ghép nối hoàn tất.
                
                Ngoài ra, trong mỗi hộp tai nghe Apple này sẽ có bốn cặp đệm tai với các kích cỡ XS, S, M, L cho người dùng thoải mái lựa chọn đệm tai phù hợp. Đệm tai làm từ chất liệu silicone cao cấp cũng sẽ cho bạn cảm giác mềm mại, vừa vặn khi đeo.
                
                Tai nghe Bluetooth AirPods Pro 2 MagSafe Charge Apple MQD83 Trắng
                
                Chất âm sống động, khả năng tái tạo âm thanh 3 chiều vượt trội
                AirPods Pro 2 được tích hợp con chip Apple H2 có thể mang lại dải âm rõ ràng, chi tiết với khả năng hiển thị từng nốt cao và âm bass sâu một cách đầy đủ. Mọi âm thanh thông qua Airpods Pro 2 đều sống động hơn bao giờ hết. Ngoài ra, Chip Apple H2 còn mang đến khả năng khử tiếng ồn thông minh và giúp kéo dài tuổi thọ pin ấn tượng.
                
                Tính năng Adaptive EQ có thể dễ dàng điều chỉnh sao cho phù hợp với từng bản nhạc bạn đang nghe nhằm cá nhân hóa trải nghiệm nghe nhạc của bạn.
                
                Tai nghe Bluetooth AirPods Pro 2 MagSafe Charge Apple MQD83 Trắng - Âm thanh 3 chiều
                
                Tích hợp micro cho khả năng thu âm ấn tượng
                Micro tích hợp sẵn với các thuật toán nâng cao cho phép tai nghe tự động nhận biết và thu nhận giọng nói tốt hơn.
                
                Tai nghe Bluetooth AirPods Pro 2 MagSafe Charge Apple MQD83 Trắng
                
                Dễ dàng kết nối với chuẩn Bluetooth 5.3
                Công nghệ kết nối không dây Bluetooth 5.3 không chỉ cho kết nối ổn định, mượt mà trong khoảng cách lên tới 10 m mà còn giúp thiết bị tiết kiệm pin đáng kể nhờ khả năng tiêu thụ năng lượng thấp, từ đó, giúp thời gian sử dụng thiết bị lâu hơn.',
                'category_id' => 10
            ],
        ];
        DB::table('products')->insert($data);
    }
}
