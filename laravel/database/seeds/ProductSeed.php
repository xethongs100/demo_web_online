<?php

use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
        	
            ['name'=>'Bánh kem Chocolate Dâu','id_type'=> 3,'description'=>'','unit_price'=> 300000,'promotion_price'=> 280000,'image'=>'banh kem sinh nhat.jpg','unit'=>'cái'],
            ['name'=>'Bánh kem Dâu III','id_type'=> 3,'description'=>'','unit_price'=> 300000,'promotion_price'=> 280000,'image'=>'Banh-kem (6).jpg','unit'=>''],
            ['name'=>'Bánh kem Dâu I','id_type'=> 3,'description'=>'','unit_price'=> 350000,'promotion_price'=> 320000,'image'=>'banhkem-dau.jpg','unit'=>'cái'],
            ['name'=>'Beefy Pizza','id_type'=> 6,'description'=>'Thịt bò xay, ngô, sốt BBQ, phô mai mozzarella','unit_price'=> 150000,'promotion_price'=> 130000,'image'=>'40819_food_pizza.jpg','unit'=>'cái'],
            ['name'=>'Hawaii Pizza','id_type'=> 6,'description'=>'Sốt cà chua, ham , dứa, pho mai mozzarella','unit_price'=>120000 ,'promotion_price'=>100000 ,'image'=>'hawaiian paradise_large-900x900.jpg','unit'=>'cái'],
            ['name'=>'Bánh su kem nhân dừa','id_type'=> 7,'description'=>'','unit_price'=> 120000,'promotion_price'=> 100000,'image'=>'maxresdefault.jpg','unit'=>'cái'],
            ['name'=>'Bánh su kem sữa tươi','id_type'=> 7,'description'=>'','unit_price'=> 120000,'promotion_price'=> 100000,'image'=>'sukem.jpg','unit'=>'cái'],
            ['name'=>'Bánh su kem sữa tươi chiên giòn','id_type'=> 7,'description'=>'','unit_price'=> 150000,'promotion_price'=> 140000,'image'=>'1434429117-banh-su-kem-chien-20.jpg','unit'=>'hộp'],
            ['name'=>'Bánh Macaron Pháp','id_type'=> 2,'description'=>'Thưởng thức macaron, người ta có thể tìm thấy từ những hương vị truyền thống như mâm xôi, chocolate, cho đến những hương vị mới như nấm và trà xanh. Macaron với vị giòn tan của vỏ bánh, béo ngậy ngọt ngào của phần nhân, với vẻ ngoài đáng yêu và nhiều màu sắc đẹp mắt, đây là món bạn không nên bỏ qua khi khám phá nền ẩm thực Pháp.','unit_price'=> 200000,'promotion_price'=> 180000,'image'=>'Macaron9.jpg','unit'=>'cái'],
            ['name'=>'Bánh Tiramisu - Italia','id_type'=> 2,'description'=>'','unit_price'=> 200000,'promotion_price'=> 180000,'image'=>'234.jpg','unit'=>'cái'],
            ['name'=>'Bánh Táo - Mỹ','id_type'=> 2,'description'=>'','unit_price'=> 200000,'promotion_price'=> 180000,'image'=>'1234.jpg','unit'=>'cái'],
            ['name'=>'Bánh French','id_type'=> 1,'description'=>'','unit_price'=> 180000,'promotion_price'=> 170000,'image'=>'banh-man-thu-vi-nhat-1.jpg','unit'=>'hộp'],
            ['name'=>'Bánh mặn thập cẩm','id_type'=> 1,'description'=>'','unit_price'=> 50000,'promotion_price'=> 45000,'image'=>'Fruit-Cake.png','unit'=>'hộp'],
            ['name'=>'Bánh Muffins trứng','id_type'=> 1,'description'=>'','unit_price'=> 100000,'promotion_price'=> 80000,'image'=>'maxresdefault.jpg','unit'=>'hộp']
        ]);
    }
}
