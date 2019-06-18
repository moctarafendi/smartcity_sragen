<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SatdaKategori extends Model
{
    protected $table = 'satda_kategori';
    protected $primaryKey = 'id_satda_kategori';
    public $timestamps = false;

    protected $fillable = [
        'name_kategori'
    ];

    public function satda(){
        return $this->hasMany('App\Satda');
    }
}
