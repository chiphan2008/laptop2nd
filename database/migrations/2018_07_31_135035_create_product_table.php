<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('idsp');
            $table->string('tensp');
            $table->string('alias');
            $table->decimal('giaban',10,0);
            $table->decimal('gianhap',10,0);
            $table->string('urlhinh');
            $table->text('mota');
            $table->text('noidung');
            $table->integer('idcat');
            $table->tinyInteger('thutu');
            $table->tinyInteger('anhien');
            $table->string('kw');
            $table->string('des');
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
        Schema::dropIfExists('product');
    }
}
