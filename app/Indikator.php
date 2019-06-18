<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Indikator extends Model
{
    protected $table = 'indikator';
    protected $primaryKey = 'id_indikator';
    public $timestamps = false;

    protected $fillable = [
        'skpd_id', 'otda_id', 'name_indikator', 'referensi', 'data_1', 'data_2'
    ];

    public function skpd(){
        return $this->belongsTo('App\Skpd');
    }

    public function otda(){
        return $this->belongsTo('App\Otda');
    }

    public function pencapaian(){
        return $this->hasMany('App\Pencapaian');
    }
}