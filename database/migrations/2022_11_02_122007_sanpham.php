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
        Schema::create('sanpham', function (Blueprint $table) {
            $table->id('id_sanpham');
            $table->string('tensanpham');
            $table->string('loaisanpham');
            $table->text('anhsanpham');
            $table->text('motasanpham')->nullable();
            $table->text('thongtinsanpham')->nullable();
            $table->integer('giasanpham'); //precision là hàm tổng độ dài, scale là hàm số thập phân phía sau
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
