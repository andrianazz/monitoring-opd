<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_id')->unique();
            $table->string('email')->unique();
            $table->string('nip');
            $table->string('phone')->nullable();
            $table->enum('gender', ['Pria', 'Wanita']);
            $table->string('password');
            $table->string('image')->default('images/user.png')->nullable();
            $table->string('address');
            $table->foreignId('government_id');
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
        Schema::dropIfExists('officers');
    }
}
