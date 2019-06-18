<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\HistoryAccess;
use App\HistoryLogin;
use Auth;

class StatisticController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
    }
    
    public function index()
    {
        //
    }
    public function statisticUser()
    {
        $users = $this->apiHeaderNav();
        date_default_timezone_set('Asia/Jakarta');
        $nowDate = date("d-m-Y");
        //get tableau
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        //count real time user
        $count_user=DB::table('history_login')
            ->where('date_logout', '=', null)
            ->count();
        return view('admin.statUser',['dateToday'=>$nowDate, 'real_user'=>$count_user, 'data1'=>$tableau, 'data'=>$users]);
    }
    public function statisticPage()
    {
        //call apiheadernav
        $users = $this->apiHeaderNav();
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        return view('admin.statPage',['data1'=>$tableau, 'data'=>$users]);
    }
    //not use for a while
    // public function statisticMenu()
    // {
    //     //set and get date today
    //     date_default_timezone_set('Asia/Jakarta');
    //     $nowDate = date("d-m-Y");
    //     //get tableau
    //     $tableau = DB::table('tableau')
    //         ->select('username', 'password')
    //         ->first();
    //     //count real time user
    //     $count_user=DB::table('history_login')
    //         ->where('date_logout', '=', null)
    //         ->count();
    //     return view('admin.statMenu',['dateToday'=>$nowDate, 'real_user'=>$count_user, 'data1'=>$tableau]);
    // }
    public function dataTablePerizinan()
    {
        $izin = DB::table('history_access')
            ->join('users', 'users.id', '=', 'history_access.user_id')
            ->join('page', 'page.id_page', '=', 'history_access.page_id')
            ->select('history_access.id_access', 'history_access.date_access', 'users.name', 'page.name_page', 'page.kategori')
            ->where('page.kategori', '=', 'Perizinan')
            ->get();
        return DataTables::of($izin)
            ->addColumn('action', function ($izin) {
                return view('layouts.partials._action2', [
                    'model' => $izin,
                    'show_url' =>'#',
                    'edit_url' => '#',
                    'delete_url' => '#',
                ]);
            })
            ->make(true);
    }
    public function dataTableKependudukan()
    {
        $penduduk = DB::table('history_access')
            ->join('users', 'users.id', '=', 'history_access.user_id')
            ->join('page', 'page.id_page', '=', 'history_access.page_id')
            ->select('history_access.id_access', 'history_access.date_access', 'users.name', 'page.name_page', 'page.kategori')
            ->where('page.kategori', '=', 'Kependudukan')
            ->get();
        return DataTables::of($penduduk)
            ->addColumn('action', function ($penduduk) {
                return view('layouts.partials._action2', [
                    'model' => $penduduk,
                    'show_url' =>'#',
                    'edit_url' => '#',
                    'delete_url' => '#',
                ]);
            })
            ->make(true);
    }
    public function dataTableKemsikinan()
    {
        $miskin = DB::table('history_access')
            ->join('users', 'users.id', '=', 'history_access.user_id')
            ->join('page', 'page.id_page', '=', 'history_access.page_id')
            ->select('history_access.id_access', 'history_access.date_access', 'users.name', 'page.name_page', 'page.kategori')
            ->where('page.kategori', '=', 'Kemiskinan')
            ->get();
        return DataTables::of($miskin)
            ->addColumn('action', function ($miskin) {
                return view('layouts.partials._action2', [
                    'model' => $miskin,
                    'show_url' =>'#',
                    'edit_url' => '#',
                    'delete_url' => '#',
                ]);
            })
            ->make(true);
    }
    public function dataTableLogin(){
        $loginTable = DB::table('history_login')
            ->join('users', 'users.id', '=', 'history_login.user_id')
            ->join('satda', 'satda.id_satda', '=', 'users.satda_id')
            ->join('skpd', 'skpd.id_skpd', '=', 'users.skpd_id')
            ->join('level', 'level.id_level', '=', 'users.level_id')
            ->Select('history_login.id_login', 'history_login.date_login', 'history_login.date_logout', 'users.name', 'satda.name_satda', 'skpd.name_skpd', 'level.name_level')
            ->get();
        return DataTables::of($loginTable)
            ->addColumn('action', function ($loginTable) {
                return view('layouts.partials._action2', [
                    'model' => $loginTable,
                    'show_url' =>'#',
                    'edit_url' => '#',
                    'delete_url' => '#',
                ]);
            })
            ->make(true);
    }
}
