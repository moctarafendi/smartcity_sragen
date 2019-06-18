<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Satda extends Model
{
    protected $table = 'satda';
    protected $primaryKey = 'id_satda';
    public $timestamps = false;

    protected $fillable = [
        'name_satda', 'provinsi_id', 'kabupaten_id', 'kategori_satda_id'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function provinsi(){
        return $this->belongsTo('App\provinsi');
    }

    public function kabupaten(){
        return $this->belongsTo('App\kabupaten');
    }

    public function skpd(){
        return $this->hasMany('App\Skpd');
    }

    public function SatdaKategori(){
        return $this->belongsTo('App\SatdaKategori');
    }
}