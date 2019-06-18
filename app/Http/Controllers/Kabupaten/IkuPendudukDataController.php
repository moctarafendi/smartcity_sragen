<?php

namespace App\Http\Controllers\Kabupaten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Tableau;

class IkuPendudukDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $this->pageViews(4);
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        $users = $this->apiHeaderNav();
        return view('kabupaten/kabIkuPendudukData',['data'=>$users, 'data1'=>$tableau]);
    }
    
    public function pekerjaan()
    {
        $this->pageViews(8);
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        $users = $this->apiHeaderNav();
        return view('kabupaten/kabIkuPendudukDataPekerjaan',['data'=>$users, 'data1'=>$tableau]);
    }
    
    public function pendidikan()
    {
        $this->pageViews(9);
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        $users = $this->apiHeaderNav();
        return view('kabupaten/kabIkuPendudukDataPendidikan',['data'=>$users, 'data1'=>$tableau]);
    }
    
    public function age()
    {
        $this->pageViews(6);
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        $users = $this->apiHeaderNav();
        return view('kabupaten/kabIkuPendudukUsia',['data'=>$users, 'data1'=>$tableau]);
    }
}