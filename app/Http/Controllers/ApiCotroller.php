<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Task;
use App\Http\Resources\login as historyLogin;
use App\Http\Resources\akses as historyAkses;
use Illuminate\Support\Facades\DB;

class ApiCotroller extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function login(){
        $users = DB::table('history_login')
            ->join('users', 'history_login.user_id', '=', 'users.id')
            ->join('provinsi', 'users.provinsi_id', '=', 'provinsi.id_provinsi')
            ->join('kabupaten', 'users.kabupaten_id', '=', 'kabupaten.id_kabupaten')
            ->join('satda', 'users.satda_id', '=', 'satda.id_satda')
            ->join('skpd', 'users.skpd_id', '=', 'skpd.id_skpd')
            ->join('level', 'users.level_id', '=', 'level.id_level')
            ->select('history_login.*', 'users.name', 'provinsi.nama_provinsi', 'kabupaten.nama_kabupaten', 'satda.name_satda', 'skpd.name_skpd', 'users.level_id', 'level.name_level')
            ->get();
    	return historyLogin::collection($users);
    }

    public function akses(){
        $users = DB::table('history_access')
            ->join('users', 'history_access.user_id', '=', 'users.id')
            ->join('provinsi', 'users.provinsi_id', '=', 'provinsi.id_provinsi')
            ->join('kabupaten', 'users.kabupaten_id', '=', 'kabupaten.id_kabupaten')
            ->join('satda', 'users.satda_id', '=', 'satda.id_satda')
            ->join('skpd', 'users.skpd_id', '=', 'skpd.id_skpd')
            ->join('level', 'users.level_id', '=', 'level.id_level')
            ->join('page', 'history_access.page_id', '=', 'page.id_page')
            ->select('history_access.*', 'users.name', 'provinsi.nama_provinsi', 'kabupaten.nama_kabupaten', 'satda.name_satda', 'skpd.name_skpd', 'users.level_id', 'level.name_level', 'page.name_page', 'page.kategori')
            ->get();
        return historyAkses::collection($users);
    }
}
