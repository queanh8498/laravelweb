<?php

use Illuminate\Database\Seeder;

class HinhAnhTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = new DateTime('2019-11-27 09:00:00');
        $dataSP = DB::select('SELECT sp_ma From sanpham');

        $lstSP = [];
        //
        $list = [
            [
               'sp_ma' => '1',
               'ha_stt' => '1',
               'ha_ten' => 'mb_manhanoi.jpg',
            ],
            [
               'sp_ma' => '2',
               'ha_stt' => '2',
               'ha_ten' => 'nk_taodailoan.jpg',
            ],
            [
               'sp_ma' => '3',
               'ha_stt' => '3',
               'ha_ten' => 'nk_nhomydenkohat.jpg',
            ],
            [
               'sp_ma' => '4',
               'ha_stt' => '2',
               'ha_ten' => 'mb_manhanoi.jpg',
            ],
        ];
       
        
        DB::table('hinhanh')->insert($list);
    }
}
