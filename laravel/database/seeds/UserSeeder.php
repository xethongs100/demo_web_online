<?php

use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('user')->insert([
        	['full_name'=>'Nguyễn Việt Hân','email'=>'han_nguyen1999@gmail.com','password'=>Hash::make('viethan123'),'phone'=>'0382484093','address'=>'129/15 đường 154,phường Tân Phú','role'=>2],
        	['full_name'=>'Nguyễn Việt Anh','email'=>'nguyen_anh1993@gmail.com','password'=>Hash::make('viethan123'),'phone'=>'0386888888','address'=>'129/15 đường 154,phường Tân Phú','role'=>2],
        ]);
    }
}
