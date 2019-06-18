<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tableau extends Model
{
    protected $table = 'tableau';
    protected $primaryKey = 'id_tableau';
    public $timestamps = false;

    protected $fillable = [
        'username', 'password'
    ];
}
