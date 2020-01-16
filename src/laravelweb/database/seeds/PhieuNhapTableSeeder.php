<?php

use Illuminate\Database\Seeder;

class PhieuNhapTableSeeder extends Seeder
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
                'pn_nguoiGiao'            => "pn_nguoiGiao $i",
                'pn_soHoaDon'             => "pn_soHoaDon $i",
                'pn_ngayXuatHoaDon'       => $today->format('Y-m-d H:i:s'),
                'pn_ghiChu'               => "pn_ghi $i",
                'nv_nguoiLapPhieu'        => $i,
                'pn_ngayLapPhieu'         => $today->format('Y-m-d H:i:s'),
                'nv_keToan'               => $i,
                'pn_ngayXacNhan'          => $today->format('Y-m-d H:i:s'),
                'nv_thuKho'               => $i,
                'pn_ngayNhapKho'          => $today->format('Y-m-d H:i:s'),
                'pn_taoMoi'               => $today->format('Y-m-d H:i:s'),
                'pn_capNhat'              => $today->format('Y-m-d H:i:s'),
                'pn_trangThai'            => $i,
                'ncc_ma'                  => $i
            ]);
        }
        DB::table('phieunhap')->insert($list);
    }
}
