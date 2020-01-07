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
        //
        $list = [];
       
        for ($i=1; $i <= 20; $i++) {
            $today = new DateTime();
            array_push($list, [
                'sp_ma'                   => $i,
                'ha_stt'                  => $i,
                'ha_ten'                  => "ha_ten $i"
            ]);
        }
        DB::table('hinhanh')->insert($list);
    }
}