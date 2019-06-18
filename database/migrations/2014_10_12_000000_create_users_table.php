<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nip',100)->unique();
            $table->integer('level_id')->unsigned();
            $table->integer('provinsi_id')->unsigned();
            $table->integer('kabupaten_id')->unsigned();
            $table->integer('satda_id')->unsigned();
            $table->integer('skpd_id')->unsigned();
            $table->integer('jabatan_id')->unsigned();
            $table->string('phone',100);
            $table->string('create_by',100);
            $table->string('editor_by',100);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
