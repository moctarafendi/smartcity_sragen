<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKategoriSatdaIdToSatda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('satda', function(Blueprint $table){
            $table->foreign('kategori_satda_id')->references('id_satda_kategori')->on('satda_kategori');
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
            $table->dropForeign('satda_kategori_satda_id_foreign');
            $table->dropColumn('kategori_satda_id');
        });
    }
}
