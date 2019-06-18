<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSatdaIdToSkpd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skpd', function(Blueprint $table){
            $table->foreign('satda_id')->references('id_satda')->on('satda');
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
            $table->dropForeign('skpd_satda_id_foreign');
            $table->dropColumn('satda_id');
        });
    }
}
