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

        for ($i=1; $i <= 5; $i++) {
            array_push($list, [     //array_push() trong PHP dùng để thêm một phần tử mới vào cuối mảng list
                'l_ma'      => $i,
                'l_ten'     => "trái $i",
                'l_ngaytaoMoi'  => $today->format('Y-m-d H:i:s'),
                'l_ngaycapNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('loai')->insert($list); //goi lenh insert
    }
}
