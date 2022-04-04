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
        Schema::create('baidangtuyendung', function (Blueprint $table) {
            $table->increments('IdBaiDang');
            $table->integer('IdNtd')->length(10)->unsigned();
            $table->foreign('IdNtd')->references('IdNtd')->on('nhatuyendung');
            $table->text('ChiTietCongViec');
            $table->text('NganhNghe');
            $table->text('KhuVuc');
            $table->text('YeuCau');
            $table->text('QuyenLoi');
            $table->string('ThoiGian');
            $table->integer('MucLuong');
            $table->integer('SoLuong');
            $table->string('ImageBaiDang');
            $table->string('TrangThaiBD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baidangtuyendung');
    }
};
