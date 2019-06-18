<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'nip', 
        'level_id', 
        'provinsi_id', 
        'kabupaten_id',
        'satda_id',
        'skpd_id',
        'jabatan_id',
        'phone',
        'created_by',
        'editor_by',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
        'remember_token',
    ];

    public function level(){
        return $this->belongsTo('App\level');
    }

    public function jabatan(){
        return $this->belongsTo('App\jabatan');
    }

    public function provinsi(){
        return $this->belongsTo('App\provinsi');
    }

    public function kabupaten(){
        return $this->belongsTo('App\kabupaten');
    }

    public function satda(){
        return $this->belongsTo('App\satda');
    }

    public function skpd(){
        return $this->belongsTo('App\skpd');
    }
}