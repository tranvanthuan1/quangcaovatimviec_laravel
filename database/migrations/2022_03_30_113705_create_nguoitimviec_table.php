<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoitimviec', function (Blueprint $table) {
            $table->increments('IdNguoiDung');
            $table->string('UserNguoiDung');
            $table->string('MkNguoiDung');
            $table->text('TenNguoiDung');
            $table->string('GioiTinh');
            $table->integer('NamSinh');
            $table->string('SoDt');
            $table->string('Email');
            $table->text('DiaChi');
            $table->text('Cv');
            $table->string('TrangThaiNTV');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoitimviec');
    }
};
