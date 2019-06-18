<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePencapaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pencapaian', function (Blueprint $table) {
            $table->increments('id_pencapaian');
            $table->integer('indikator_id')->unsigned();
            $table->string('target_pencapaian', 100);
            $table->string('hasil_pencapaian', 100);
            $table->string('periode', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pencapaian');
    }
}
