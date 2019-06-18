<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSkpdIdToIndikator extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('indikator', function(Blueprint $table){
            $table->foreign('skpd_id')->references('id_skpd')->on('skpd');
            $table->foreign('otda_id')->references('id_otda')->on('otda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('indikator', function(Blueprint $table){
            $table->dropForeign('indikator_skpd_id_foreign');
            $table->dropForeign('indikator_otda_id_foreign');
            $table->dropColumn('skpd_id');
            $table->dropColumn('otda_id');
        });
    }
}
