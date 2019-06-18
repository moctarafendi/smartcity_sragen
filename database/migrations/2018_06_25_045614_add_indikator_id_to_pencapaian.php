<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndikatorIdToPencapaian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pencapaian', function(Blueprint $table){
            $table->foreign('indikator_id')->references('id_indikator')->on('indikator');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pencapaian', function(Blueprint $table){
            $table->dropForeign('pencapaian_indikator_id_foreign');
            $table->dropColumn('indikator_id');
        });
    }
}
