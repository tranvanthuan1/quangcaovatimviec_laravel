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
        Schema::create('UngVien', function (Blueprint $table) {
            $table->integer('IdBaiDang')->length(10)->unsigned();
            $table->foreign('IdBaiDang')->references('IdBaiDang')->on('baidangtuyendung');
            $table->integer('IdNguoidung')->length(10)->unsigned();
            $table->foreign('IdNguoidung')->references('IdNguoidung')->on('nguoitimviec');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('UngVien');
    }
};
