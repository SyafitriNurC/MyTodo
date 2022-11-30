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
        Schema::create('users2', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('remember_token');
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->string('roles');
            $table->string('addres');
            $table->string('phone');
            $table->string('avatar');
            $table->enum('ACTIVE I INACTIVE', ['submit', 'proses', 'finish', 'cancel']);
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
        Schema::dropIfExists('users2');
    }
};