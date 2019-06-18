<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otda extends Model
{
    protected $table = 'otda';
    protected $primaryKey = 'id_otda';
    public $timestamps = false;

    protected $fillable = [
        'name_otda'
    ];

    public function indikator(){
        return $this->hasMany('App\indikator');
    }
}