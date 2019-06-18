<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pencapaian extends Model
{
    protected $table = 'pencapaian';
    protected $primaryKey = 'id_pencapaian';
    protected $timestamps = false;

    protected $fillable = [
        'target_pencapaian', 'hasil_pencapaian', 'periode','indikator_id'
    ];

    public function indikator(){
        return $this->belongsTo('App\Indikator');
    }
}