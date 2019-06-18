<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryLogin extends Model
{
    protected $table = 'history_login';
    protected $primaryKey = 'id_login';
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'date_login', 'id_session'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
