<?php

use Illuminate\Database\Seeder;

class MauSPTableSeeder extends Seeder
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
        
        for ($i=1; $i <= 3; $i++) {
            $today = new DateTime();
            array_push($list, [
                'sp_ma'                   => $i,
                'm_ma'                    => $i,
                'msp_soluong'             => $i
            ]);
        }
        DB::table('mau_sanpham')->insert($list);
    }
}
