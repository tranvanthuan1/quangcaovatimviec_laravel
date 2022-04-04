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
        Schema::create('nhatuyendung', function (Blueprint $table) {
            $table->increments('IdNtd');
            $table->string('UserNtd');
            $table->string('MkNtd');
            $table->text('TenNtd');
            $table->string('MST');
            $table->string('SoDt');
            $table->string('Email');
            $table->text('LinhVuc');
            $table->string('TrangThaiTD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhatuyendung');
    }
};
