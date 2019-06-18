<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoryAccess extends Model
{
    protected $table = 'history_access';
    protected $primaryKey = 'id_access';
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'date_access', 'page_id'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
