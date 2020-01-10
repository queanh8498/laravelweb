<?php

use Illuminate\Database\Seeder;

class ChitietNhapTableSeeder extends Seeder
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
                'pn_ma'                   => $i,
                'sp_ma'                   => $i,
                'k_ma'                   => $i,
                //'m_ma'                    => $i,
                'ctn_soLuong'             => $i,
                'ctn_donGia'              => $i
            ]);
        }
        DB::table('chitietnhap')->insert($list);  
    }
}
