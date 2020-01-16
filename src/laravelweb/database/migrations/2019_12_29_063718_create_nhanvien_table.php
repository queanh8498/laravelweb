<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->unsignedTinyInteger('nv_ma')->autoIncrement();
            $table->string('nv_taiKhoan');
            $table->string('nv_matKhau');
            $table->string('nv_hoTen');
            $table->unsignedTinyInteger('nv_gioiTinh')->default('1');
            $table->string('nv_email');
            $table->dateTime('nv_ngaySinh');
            $table->string('nv_diaChi');
            $table->string('nv_dienThoai');
            $table->timestamp('nv_taoMoi')->nullable();
            $table->timestamp('nv_capNhat')->nullable();
            $table->unsignedTinyInteger('nv_trangThai')->default('2');
            
            $table->unique(['nv_taiKhoan', 'nv_email', 'nv_dienThoai']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
