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
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('email');
            $table->string('name');
            $table->string('password');
            $table->string('avatar');
            $table->timestamps();
        });
        DB::table('users')->insert(
            array(
                'id_user' => '1',
                'email' => 'admin@admin.com',
                'name' => 'admin',
                'password' => '$2a$12$aKlRhd8oOJmbf9AoWOtRae60xoHGauAJSYQWty.qk5MHzJX0okBGS',
                'avatar' => '1671470944.webp'
            )
        );
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
