<?php

use Illuminate\Database\Seeder;

class LoaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list = []; //create list chuwas data 
        
        $today = new DateTime('2020-01-01 08:00:00');
        //create list chuwas data
        $list = [
            [
                'l_ma' => 1,
                'l_ten' => "Trái cây miền Bắc",
                'l_ngaytaoMoi' => $today->format('Y-m-d H:i:s'),
                'l_ngaycapNhat' => $today->format('Y-m-d H:i:s'),
                'l_trangThai' => '2',
            ],
            [
                'l_ma' => 2,
                'l_ten' => "Trái cây miền Trung",
                'l_ngaytaoMoi' => $today->format('Y-m-d H:i:s'),
                'l_ngaycapNhat' => $today->format('Y-m-d H:i:s'),
                'l_trangThai' => '2',
            ],
            [
                'l_ma' => 3,
                'l_ten' => "Trái cây miền Nam",
                'l_ngaytaoMoi' => $today->format('Y-m-d H:i:s'),
                'l_ngaycapNhat' => $today->format('Y-m-d H:i:s'),
                'l_trangThai' => '2',
            ],
            [
                'l_ma' => 4,
                'l_ten' => "Trái cây nhập khẩu",
                'l_ngaytaoMoi' => $today->format('Y-m-d H:i:s'),
                'l_ngaycapNhat' => $today->format('Y-m-d H:i:s'),
                'l_trangThai' => '2',
            ],
        ];  
        
        DB::table('loai')->insert($list); //goi lenh insert
    }
}
