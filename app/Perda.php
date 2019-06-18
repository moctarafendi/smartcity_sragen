<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perda extends Model
{
    protected $table = 'perda';
    protected $primaryKey = 'id_perda';

    protected $fillable = [
        'name_perda'
    ];

    public function skpd(){
        return $this->hasMany('App\Skpd');
    }
}