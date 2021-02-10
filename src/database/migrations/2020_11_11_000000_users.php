<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('discord_user_id')->unsigned();
            $table->string('remember_token', 100)->nullable();
            $table->string('discord_username');
            $table->string('discord_avatar_hash', 32)->nullable();
            $table->string('server_nickname')->nullable();
            $table->string('email')->nullable();

            $table->primary('discord_user_id');

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
        Schema::dropIfExists('users');
    }
}
