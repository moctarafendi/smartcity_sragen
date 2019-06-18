<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProvinsiIdAndKabupatenIdToSatda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('satda', function(Blueprint $table){
            $table->foreign('provinsi_id')->references('id_provinsi')->on('provinsi');
            $table->foreign('kabupaten_id')->references('id_kabupaten')->on('kabupaten');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('satda', function(Blueprint $table){
            $table->dropForeign('satda_provinsi_id_foreign');
            $table->dropForeign('satda_kabupaten_id_foreign');
            $table->dropColumn('provinsi_id');
            $table->dropColumn('kabupaten_id');
        });
    }
}
