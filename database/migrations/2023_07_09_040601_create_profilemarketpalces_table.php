<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilemarketpalcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilemarketpalces', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('diskripsi');
            $table->text('address')->nullable();
            $table->text('telpon')->nullable();
            $table->integer('zipcode')->nullable();
            $table->string('email')->nullable();
            $table->string('social1');
            $table->string('social2');
            $table->string('social3')->nullable();
            $table->string('social4')->nullable();
            $table->string('logo')->nullable();
            $table->string('kota')->nullable();



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
        Schema::dropIfExists('profilemarketpalces');
    }
}