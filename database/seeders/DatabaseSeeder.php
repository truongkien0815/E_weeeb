<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('products')->insert([
            'id' => 4,
            'name' => 'OPPO Reno6 Z 5G',
            'manu_id' => 3,
            'type_id' => 1,
            'price' => 9490000,
            'image' => 'product_1.png',
            'description' =>  '      
            Cấu hình Điện thoại OPPO Reno6 Z 5G.
             Màn hình: AMOLED,6.43 ",Full HD+ Hệ điều hành: Android 11 + Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP Camera trước:32 MP Chip: MediaTek Dimensity 800U 5G RAM: 8 GB Bộ nhớ trong: 128 GB,
             SIM:2 Nano SIM, Hỗ trợ 5G,
             Pin, Sạc:4310 mAh,30 W ',
            'quantity' => 10,
            'feature' => 1,
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',
          ]);
          DB::table('products')->insert([
            'id' => 7,
            'name' => 'Oppo Watch 46mm dây silicone',
            'manu_id' => 3,
            'type_id' => 5,
            'price' => 7990000,
            'image' => 'product_2.png',
            'description' =>  '
               Cấu hình Oppo Watch 46mm dây silicone vàng đồng,
               Màn hình:AMOLED,1.91 inch,
               Thời lượng pin: Khoảng 21 ngày (chế độ tiết kiệm pin),Khoảng 36 giờ (chế độ thường).Kết nối với hệ điều hành: Android 6.0 trở lên và iOS 12 trở lên,
               Mặt: Kính cường lực,46 mm,
               Tính năng cho sức khỏe: Chế độ luyện tập. Theo dõi giấc ngủ. Tính lượng calories tiêu thụ. Tính quãng đường chạy. Đo nhịp tim. Đếm số bước chân',
            'quantity' => 10,
            'feature' => 1,
            'created_at' => '2022/04/10',
            'updated_at' => '2022/04/10',
          ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        
    DB::table('protypes')->insert([
      'type_id' => 1,
      'type_name' => 'ÁO',
    ]);

    DB::table('protypes')->insert([
      'type_id' => 2,
      'type_name' => 'QUẦN',
    ]);
    DB::table('protypes')->insert([
      'type_id' => 3,
      'type_name' => 'GIÀY',
    ]);
    DB::table('protypes')->insert([
      'type_id' => 4,
      'type_name' => 'ĐỒNG HỒ',
    ]);
    DB::table('protypes')->insert([
      'type_id' => 5,
      'type_name' => 'MŨ',
    ]);

    DB::table('manufactures')->insert([
      'manu_id' => 1,
      'manu_name' => 'Apple',
    ]);
    DB::table('manufactures')->insert([
      'manu_id' => 2,
      'manu_name' => 'Samsung',
    ]);
    DB::table('manufactures')->insert([
      'manu_id' => 3,
      'manu_name' => 'Oppo',
    ]);
    DB::table('manufactures')->insert([
      'manu_id' => 4,
      'manu_name' => 'Xiaomi',
    ]);

    DB::table('manufactures')->insert([
      'manu_id' => 5,
      'manu_name' => 'Asus',
    ]);
    DB::table('manufactures')->where('manu_id', 2)->update([
      'manu_name' => 'Samsung',
    ]);



    DB::table('products')->insert([
      'id' => 8,
      'name' => 'Oppo Watch 41mm dây silicone',
      'manu_id' => 3,
      'type_id' => 5,
      'price' => 7990000,
      'image' => 'product_3.png',
      'description' =>  '
         Cấu hình Oppo Watch 41mm dây silicone đen
         Màn hình:AMOLED,1.6 inchThời lượng pin: Khoảng 14 ngày (chế độ tiết kiệm pin),Khoảng 24 giờ (chế độ thường),
         Kết nối với hệ điều hành: Android 6.0 trở lên, iOS 12 trở lên,
         Mặt: Kính cường lực,41 mm,
         Tính năng cho sức khỏe: Chế độ luyện tập. Theo dõi giấc ngủ. Tính lượng calories tiêu thụ. Tính quãng đường chạy. Đo nhịp tim. Đếm số bước chân',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);
    DB::table('products')->insert([
      'id' => 9,
      'name' => 'Xiaomi 11 Lite 5G NE',
      'manu_id' => 4,
      'type_id' => 1,
      'price' => 9490000,
      'image' => 'product_4.png',
      'description' =>  '
      Cấu hình Điện thoại Xiaomi 11 Lite 5G NE,
Màn hình:AMOLED; 6.55 ;Full HD+,
Hệ điều hành:Android 11,
Camera sau: Chính 64 MP & Phụ 8 MP; 5 MP,
Camera trước: 20 MP,
Chip: Snapdragon 778G 5G 8 nhân,
RAM:8 GB
Bộ nhớ trong:128 GB,
SIM:2 Nano SIM (SIM 2 chung khe thẻ nhớ); Hỗ trợ 5G,
Pin và Sạc:4250 mAh và 33 W,
Hãng: Xiaomi.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);
    DB::table('products')->insert([
      'id' => 6,
      'name' => 'Tai nghe Bluetooth True Wireless OPPO ENCO Buds ETI81',
      'manu_id' => 3,
      'type_id' => 4,
      'price' => 790000,
      'image' => 'product_5.png',
      'description' =>  '
         Thông số kỹ thuật Tai nghe Bluetooth True Wireless OPPO ENCO Buds ETI81,
         Thời gian tai nghe: Dùng 6 giờ - Sạc 2.5 giờ,
         Thời gian hộp sạc: Dùng 24 giờ - Sạc 2.5 giờ,
         Cổng sạc: Type-C,
         Tương thích: Android, iOS (iPhone, iPad), Windows,
         Tiện ích: Chống nước. Điều khiển bằng: Cảm ứng chạm. Hãng: OPPO',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);
    DB::table('products')->insert([
      'id' => 5,
      'name' => 'OPPO Find X3 Pro 5G',
      'manu_id' => 3,
      'type_id' => 1,
      'price' => 26990000,
      'image' => 'product_6.png',
      'description' =>  '
         Cấu hình Điện thoại OPPO Find X3 Pro 5G,
         Màn hình: AMOLED - 6.7 & Quad HD+ (2K+),
         Hệ điều hành: Android 11. Camera sau:Chính 50 MP & Phụ 50 MP 13 MP 3 MP,
         Camera trước: 32 MP.
         Chip:Snapdragon 888. RAM:12 GB,
         Bộ nhớ trong: 256 GB,
         SIM: 2 Nano SIM & Hỗ trợ 5G,
         Pin và Sạc:4500 mAh 65 W',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);

    DB::table('products')->insert([
      'id' => 10,
      'name' => 'Xiaomi Pad 5 256GB',
      'manu_id' => 4,
      'type_id' => 3,
      'price' => 10490000,
      'image' => 'product_7.png',
      'description' =>  '
Cấu hình Máy tính bảng Xiaomi Pad 5 256GB,
Màn hình:11 và IPS LCD,
Hệ điều hành: Android 11, 
Chip: Snapdragon 860 8 nhân,
RAM:6 GB Bộ nhớ trong:256 GB,
Camera sau:13 MP Camera trước:8 MP 
Pin và Sạc:8720 mAh 33 W,
 Hãng: Xiaomi',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',




      //  
    ]);
    DB::table('products')->insert([
      'id' => 1,
      'name' => 'Điện thoại iPhone 13 Pro Max 256GB',
      'manu_id' => 1,
      'type_id' => 1,
      'price' => 36990000,
      'image' => 'product_8.png',
      'description' =>  '
                     Màn hình: OLED6.7"Super Retina XDR,
                     Hệ điều hành: iOS 15,
                     Camera sau: 3 camera 12 MP,
                     Camera trước: 12 MP,
                     Chip: Apple A15 Bionic,
                     RAM: 6 GB,
                     Bộ nhớ trong: 256 GB,
                     SIM: 1 Nano SIM & 1 eSIMHỗ trợ 5G,
                     Pin & Sạc: 4352 mAh20 W ',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10'


    ]);
    DB::table('products')->insert([
      'id' => 2,
      'name' => 'Điện thoại iPhone 11 64GB',
      'manu_id' => 1,
      'type_id' => 1,
      'price' => 16290000,
      'image' => 'product_9.png',
      'description' =>  '
                     Màn hình: IPS LCD6.1"Liquid Retina,
                     Hệ điều hành: iOS 15,
                     Camera sau: 3 camera 12 MP,
                     Camera trước: 12 MP,
                     Chip: Apple A15 Bionic,
                     RAM: 4 GB. Bộ nhớ trong:64 GB,
                     SIM: 1 Nano SIM & 1 eSIMHỗ trợ 4G,
                     Pin và Sạc:3110 mAh18 W,
                   ',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);

    DB::table('products')->insert([
      'id' => 3,
      'name' => 'Điện thoại Samsung Galaxy A13 6GB ',
      'manu_id' => 1,
      'type_id' => 1,
      'price' => 4990000,
      'image' => 'product_3.png',
      'description' =>  'Màn hình: PLS TFT LCD6.6"Full HD+
          Hệ điều hành: Android 12
          Camera sau: Chính 50 MP & Phụ 5 MP & 2 MP & 2 MP,
          Camera trước: 8 MP,
          Chip: Exynos 850.
          RAM: 6 GB. 
          Bộ nhớ trong: 128 GB  ,     
          SIM:2 Nano SIM và hỗ trợ 4G,
          Pin và Sạc:  5000 mAh 15 W',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);
    }
}
