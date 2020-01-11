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
        $this->call(KhoTableSeeder::class);
        $this->call(LoaiTableSeeder::class);
        
        // TODO: bổ sung các seeder còn lại theo thứ tự chạy~
    }
}
