<?php

use Illuminate\Database\Seeder;

class ChuDeTableSeeder extends Seeder
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
       
        $today = new DateTime();

        for ($i=1; $i <= 10; $i++) {
            array_push($list, [
                'cd_ma'      => $i,
                'cd_ten'     => "chu de $i",
                'cd_taoMoi'  => $today->format('Y-m-d H:i:s'),
                'cd_capNhat' => $today->format('Y-m-d H:i:s')
            ]);
        }
        DB::table('chude')->insert($list);   
    }
}
