<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPerdaIdToSkpd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skpd', function(Blueprint $table){
            $table->foreign('perda_id')->references('id_perda')->on('perda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skpd', function(Blueprint $table){
            $table->dropForeign('skpd_perda_id_foreign');
            $table->dropColumn('perda_id');
        });
    }
}
