<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('iddh');
            $table->string('code');
            $table->string('name');
            $table->tinyInteger('sex');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->text('note');
            $table->integer('ship');
            $table->tinyInteger('payment');
            $table->integer('city');
            $table->integer('district');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('donhang');
    }
}
