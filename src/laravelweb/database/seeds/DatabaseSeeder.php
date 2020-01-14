<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Chạy câu lệnh `php artisan db:seed`
        $this->call(DonvitinhTableSeeder::class);
        $this->call(KhachHangTableSeeder::class);
        $this->call(LoaiTableSeeder::class);
        $this->call(QuyenTableSeeder::class);
        $this->call(DonvitinhTableSeeder::class);
        $this->call(ThanhToanTableSeeder::class);
        $this->call(VanChuyenTableSeeder::class);
        $this->call(XuatXuTableSeeder::class);
        $this->call(NhaCungCapTableSeeder::class);
        $this->call(NhanVienTableSeeder::class);
        $this->call(SanPhamTableSeeder::class);
        $this->call(HinhAnhTableSeeder::class);
        //$this->call(GopYTableSeeder::class);
        $this->call(KhoTableSeeder::class);
        $this->call(PhieuNhapTableSeeder::class);
        $this->call(ChitietNhapTableSeeder::class);

       
        
        // TODO: bổ sung các seeder còn lại theo thứ tự chạy~
    }
}
