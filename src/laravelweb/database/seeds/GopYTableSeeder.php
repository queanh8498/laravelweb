<?php

use Illuminate\Database\Seeder;

class GopYTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $list = [];
       

        for ($i=1; $i <= 10; $i++) {
            $today = new DateTime();
            array_push($list, [
                'gy_thoiGian'             => $today->format('Y-m-d H:i:s'),
                'gy_noiDung'              => "nd $i",
                'kh_ma'                   => $i,
                'sp_ma'                   => $i,
                'gy_trangThai'            => $i
            ]);
        }
        DB::table('gopy')->insert($list);

    }
}
