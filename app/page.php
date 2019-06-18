<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    protected $table = 'page';
    protected $primaryKey = 'id_page';
    public $timestamps = false;

    protected $fillable = [
        'name_page', 'kategori'
    ];

    public function historysccess(){
        return $this->hasMany('App\HistoryAccess');
    }
}
