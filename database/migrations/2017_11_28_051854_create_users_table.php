<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) 
        {
            $table->increments('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->longtext('address');
            $table->string('billinginfo');
            $table->string('credicardinfo');
            $table->string('phonenumber')->unique();
            $table->string('profilepic');
            $table->timestamps();
        });    
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
