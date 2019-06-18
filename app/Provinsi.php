<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';
    protected $primaryKey = 'id_provinsi';

    protected $fillable = [
        'nama_provinsi', 'logo_provinsi'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function kabupaten(){
        return $this->hasMany('App\Kabupaten');
    }

    public function satda(){
        return $this->hasMany('App\Satda');
    }
}