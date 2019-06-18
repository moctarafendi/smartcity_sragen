<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';
    protected $primaryKey = 'id_kabupaten';

    protected $fillable = [
        'provinsi_id', 'nama_kabupaten', 'logo_kabupaten', 'status'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function provinsi(){
        return $this->belongsTo('App\Provinsi');
    }

    public function satda(){
        return $this->hasMany('App\Satda');
    }
}