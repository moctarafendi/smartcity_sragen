<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndikatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator', function (Blueprint $table) {
            $table->increments('id_indikator');
            $table->integer('skpd_id')->unsigned();
            $table->integer('otda_id')->unsigned();
            $table->string('name_indikator', 255);
            $table->string('referensi', 255);
            $table->string('data_1', 255);
            $table->string('data_2', 255);
            $table->integer('status')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indikator');
    }
}
