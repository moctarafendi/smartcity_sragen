<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProvinsiIdToKabupaten extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kabupaten', function(Blueprint $table){
            $table->foreign('provinsi_id')->references('id_provinsi')->on('provinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('kabupaten', function(Blueprint $table){
            $table->dropForeign('kabupaten_provinsi_id_foreign');
            $table->dropColumn('provinsi_id');
        });
    }
}
