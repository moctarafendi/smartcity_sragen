<?php

namespace App\Http\Controllers\Kabupaten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Tableau;
use HistoryAccess;

class IkuIzinDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $this->pageViews(1);
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        $users = $this->apiHeaderNav();
        return view('kabupaten/kabIkuIzinData',['data'=>$users, 'data1'=>$tableau]);
    }
    
    public function status()
    {
        $this->pageViews(2);
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        $users = $this->apiHeaderNav();
        return view('kabupaten/kabIkuIzinDataStatus',['data'=>$users, 'data1'=>$tableau]);
    }
}
