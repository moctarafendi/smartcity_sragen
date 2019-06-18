<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Alert;
use Auth;
use App\Jabatan;
use App\Kabupaten;
use App\Level;
use App\Provinsi;
use App\Satda;
use App\Skpd;
use App\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $level = Auth::user()->level_id;
        $users = $this->apiHeaderNav();
        if($level == '1'){
            return view('admin.adminHome',['data'=>$users]);
        }else if(($level == '2')||($level == '4')){
            return view('provinsi.provHome',['data'=>$users]);
        }else if(($level == '3')||($level == '5')){
            return view('kabupaten.kabHome',['data'=>$users]);
        }else{
            return view('kabupaten.kabHome');
        }
    }
    public function apiHeaderNav(){
        $iduser = Auth::user()->id;
        return DB::table('users')
            ->join('provinsi', 'users.provinsi_id', '=', 'provinsi.id_provinsi')
            ->join('kabupaten', 'users.kabupaten_id', '=', 'kabupaten.id_kabupaten')
            ->select('users.*', 'provinsi.nama_provinsi', 'kabupaten.nama_kabupaten')
            ->where('users.id', '=', $iduser)
            ->first();
    }
    public function pageViews($pageValue){
        $iduser = Auth::user()->id;
        $nowDate = $this->getDate();
        DB::table('history_access')
            ->insert([
                'user_id' => $iduser, 
                'date_access' => $nowDate, 
                'page_id' => $pageValue
        ]);
    }
    public function getDate(){
        date_default_timezone_set('Asia/Jakarta');
        $nowDate = date("Y-m-d H:i:s");
        return $nowDate;
    }
}