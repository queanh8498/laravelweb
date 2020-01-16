<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ThanhToanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker\Factory::create('vi-VN');
        //$now = new Carbon('2019-11-28','Asia/Ho_Chi_Minh');
        $today = new DateTime('2019-11-27 09:00:00');
        $list=[];

        // for ($i =1; $i <=20; $i++){
        //     $created = $now->copy()->addSeconds($faker->numberBetween(1,259200));
        //     $updated = $now->copy()->addSeconds($faker->numberBetween(300,172000));

        //     $data = [
        //         'tt_ten' => $faker->text(100),
        //         'tt_dienGiai' => $faker->paragraph(100),
        //         'tt_taoMoi' => $created,
        //         'tt_capNhat' => $updated,
        //         'tt_trangThai' => $faker->numberBetween(1,2)

        //     ];

        //     //dd($data);
        //     array_push($list, $data);
        //     $now = $updated->copy();
        // }

        array_push($list, [
            'tt_ma' => '1',
            'tt_ten' => 'Thanh toán khi nhận hàng',
            'tt_dienGiai' => 'Bạn hãy thanh toán khi nhận hàng',
            'tt_taoMoi' => $today->format('Y-m-d H:i:s'),
            'tt_capNhat' => $today->format('Y-m-d H:i:s'),
            'tt_trangThai' => '2'
        ]);
        array_push($list, [
            'tt_ma' => '2',
            'tt_ten' => 'Paypal',
            'tt_dienGiai' => 'Bạn hãy thanh toán qua Paypal',
            'tt_taoMoi' =>  $today->format('Y-m-d H:i:s'),
            'tt_capNhat' =>  $today->format('Y-m-d H:i:s'),
            'tt_trangThai' => '2'
        ]);
        array_push($list, [
            'tt_ma' => '3',
            'tt_ten' => 'ATM',
            'tt_dienGiai' => 'Bạn hãy thanh toán qua thẻ ATM',
            'tt_taoMoi' =>  $today->format('Y-m-d H:i:s'),
            'tt_capNhat' =>  $today->format('Y-m-d H:i:s'),
            'tt_trangThai' => '2'
        ]);
        DB::table('thanhtoan')->insert($list);
    }
}
