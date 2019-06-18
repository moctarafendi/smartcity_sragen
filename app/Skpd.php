<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skpd extends Model
{
    protected $table = 'skpd';
    protected $primaryKey = 'id_skpd';
    public $timestamps = false;

    protected $fillable = [
        'satda_id', 'name_skpd', 'perda_id', 'status'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }

    public function satda(){
        return $this->belongsTo('App\Satda');
    }

    public function perda(){
        return $this->belongsTo('App\Perda');
    }

    public function indikator(){
        return $this->hasMany('App\indikator');
    }
}