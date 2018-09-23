<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill', function (Blueprint $table) {
          $table->increments('idbill');
          $table->string('code_bill');
          $table->string('code_discount');
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
        Schema::dropIfExists('bill');
    }
}
