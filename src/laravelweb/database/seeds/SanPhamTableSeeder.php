<?php


use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\PhpVnDataGenerator\VnBase;
use Illuminate\PhpVnDataGenerator\VnFullname;
use Illuminate\PhpVnDataGenerator\VnPersonalInfo;


class SanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        //$faker = Faker\Factory::create('vi-VN'); //Faker cho phép Developer giả lập các dữ liệu mẫu
        $now = new Carbon('2019-11-28','Asia/Ho_Chi_Minh'); //Đây là một thư viên PHP giúp cho Developer làm việc với ngày giờ
        
        //$photos=array('hoahong.jpg','hoalan.jpg','hoatuoi.jpg');
        //$list=[];

        //lay ds loai san pham
        $dataLSP = DB::select('SELECT l_ma From loai');

        $lstLSP = [];

        // foreach($dataLSP as $key => $value){
        //     $lstLSP[] = $value->l_ma;
        // }

        // for ($i =1; $i <=5; $i++){ //tao 5 dong du lieu
        //     $today = new DateTime();
        //     array_push($list,[
        //         'sp_ten' => $faker->text(100),
        //         'sp_giaGoc' => $faker->numberBetween(10000,1000000),
        //         'sp_giaBan' => $faker->numberBetween(10000,1000000),
        //         'sp_hinh' => "mb_manhanoi.jpg",
        //         'sp_thongTin' => $faker->paragraph(),
        //         'sp_danhGia' => $faker->text(100),
        //         'sp_taoMoi' => $today->format('Y-m-d H:i:s'),
        //         'sp_capNhat' => $today->format('Y-m-d H:i:s'),
        //         'sp_trangThai' => $faker->numberBetween(1,2),
        //         'l_ma' => $faker->randomElement($lstLSP)
        //     ]);
        // }   
        
        $today = new DateTime('2019-11-27 09:00:00');
        $list=[
            [
                'sp_ma' => 1,
                'sp_ten' => 'Mận Hà Nội',
                'sp_giaGoc' => '30000',
                'sp_giaBan' => '50000',
                'sp_hinh' => "mb_manhanoi.jpg",
                'sp_thongTin' => 'Chất lượng',
                'sp_danhGia' => "Chất lượng tốt",
                'sp_taoMoi' => $today->format('Y-m-d H:i:s'),
                'sp_capNhat' => $today->format('Y-m-d H:i:s'),
                'sp_trangThai' => '2',
                'l_ma' => '1',
            ],
            [
                'sp_ma' => 2,
                'sp_ten' => 'Táo Đài Loan',
                'sp_giaGoc' => '40000',
                'sp_giaBan' => '60000',
                'sp_hinh' => "nk_taodailoan.jpg",
                'sp_thongTin' => 'Chất lượng',
                'sp_danhGia' => "Chất lượng tốt",
                'sp_taoMoi' => $today->format('Y-m-d H:i:s'),
                'sp_capNhat' => $today->format('Y-m-d H:i:s'),
                'sp_trangThai' => '2',
                'l_ma' => '4',
            ],
            [
                'sp_ma' => 3,
                'sp_ten' => 'Nho Mỹ đen không hạt',
                'sp_giaGoc' => '60000',
                'sp_giaBan' => '80000',
                'sp_hinh' => "nk_nhomydenkohat.jpg",
                'sp_thongTin' => 'Chất lượng',
                'sp_danhGia' => "Chất lượng tốt",
                'sp_taoMoi' => $today->format('Y-m-d H:i:s'),
                'sp_capNhat' => $today->format('Y-m-d H:i:s'),
                'sp_trangThai' => '2',
                'l_ma' => '4',
            ],
            [
                'sp_ma' => 4,
                'sp_ten' => 'Nho Ninh Thuận',
                'sp_giaGoc' => '60000',
                'sp_giaBan' => '80000',
                'sp_hinh' => "mb_manhanoi.jpg",
                'sp_thongTin' => 'Chất lượng',
                'sp_danhGia' => "Chất lượng tốt",
                'sp_taoMoi' => $today->format('Y-m-d H:i:s'),
                'sp_capNhat' => $today->format('Y-m-d H:i:s'),
                'sp_trangThai' => '1',
                'l_ma' => '2',
            ],
        ];

        DB::table('sanpham')->insert($list);
    }
}
