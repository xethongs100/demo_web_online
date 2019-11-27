<?php

use Illuminate\Database\Seeder;

class TypeProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('type_product')->insert([
        	['name'=>'Bánh mặn','description'=>'Nếu từng bị mê hoặc bởi các loại tarlet ngọt thì chắn chắn bạn không thể bỏ qua những loại tarlet mặn. Ngoài hình dáng bắt mắt, lớp vở bánh giòn giòn cùng với nhân mặn như thịt gà, nấm, thị heo ,… của bánh sẽ chinh phục bất cứ ai dùng thử.','image'=>'banh-man-thu-vi-nhat-1.jpg'],
        	['name'=>'Bánh ngọt','description'=>'Bánh ngọt là một loại thức ăn thường dưới hình thức món bánh dạng bánh mì từ bột nhào, được nướng lên dùng để tráng miệng. Bánh ngọt có nhiều loại, có thể phân loại dựa theo nguyên liệu và kỹ thuật chế biến như bánh ngọt làm từ lúa mì, bơ, bánh ngọt dạng bọt biển. Bánh ngọt có thể phục vụ những mục đính đặc biệt như bánh cưới, bánh sinh nhật, bánh Giáng sinh, bánh Halloween.','image'=>'20131108144733.jpg'],
        	['name'=>'Bánh trái cây','description'=>'Bánh trái cây, hay còn gọi là bánh hoa quả, là một món ăn chơi, không riêng gì của Huế nhưng khi \"lạc\" vào mảnh đất Cố đô, món bánh này dường như cũng mang chút tinh tế, cầu kỳ và đặc biệt. Lấy cảm hứng từ những loại trái cây trong vườn, qua bàn tay khéo léo của người phụ nữ Huế, món bánh trái cây ra đời - ngọt thơm, dịu nhẹ làm đẹp lòng biết bao người thưởng thức.','image'=>'banhtraicay.jpg'],
        	['name'=>'Bánh kem','description'=>'','image'=>'banhkem.jpg'],
        	['name'=>'Bánh crepe','description'=>'','image'=>'crepe.jpg'],
        	['name'=>'Bánh Pizza','description'=>'','image'=>'pizza.jpg'],
        	['name'=>'Bánh su kem','description'=>'','image'=>'sukemdau.jpg']
        ]);
    }
}
