<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignToUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->foreign('level_id')->references('id_level')->on('level');
            $table->foreign('provinsi_id')->references('id_provinsi')->on('provinsi');
            $table->foreign('kabupaten_id')->references('id_kabupaten')->on('kabupaten');
            $table->foreign('satda_id')->references('id_satda')->on('satda');
            $table->foreign('skpd_id')->references('id_skpd')->on('skpd');
            $table->foreign('jabatan_id')->references('id_jabatan')->on('jabatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table){
            $table->dropForeign('users_level_id_foreign');
            $table->dropForeign('users_provinsi_id_foreign');
            $table->dropForeign('users_kabupaten_id_foreign');
            $table->dropForeign('users_satda_id_foreign');
            $table->dropForeign('users_skpd_id_foreign');
            $table->dropForeign('users_jabatan_id_foreign');
            $table->dropColumn('level_id');
            $table->dropColumn('provinsi_id');
            $table->dropColumn('kabupaten_id');
            $table->dropColumn('satda_id');
            $table->dropColumn('skpd_id');
            $table->dropColumn('jabatan_id');
        });
    }
}
