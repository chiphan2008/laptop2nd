<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangchitietTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhangchitiet', function (Blueprint $table) {
            $table->integer('iddh');
            $table->integer('idsp');
            $table->integer('soluong');
            $table->integer('giaban');
            $table->string('makm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhangchitiet');
    }
}
