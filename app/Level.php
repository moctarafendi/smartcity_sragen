<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table = 'level';
    protected $primaryKey = 'id_level';

    protected $fillable = [
        'name_level'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }
}