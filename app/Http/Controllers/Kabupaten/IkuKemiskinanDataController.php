<?php

namespace App\Http\Controllers\Kabupaten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Tableau;

class IkuKemiskinanDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $this->pageViews(10);
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        $users = $this->apiHeaderNav();
        return view('kabupaten/kabIkuKemiskinanData',['data'=>$users, 'data1'=>$tableau]);
    }
    
    public function bps()
    {
        $this->pageViews(11);
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        $users = $this->apiHeaderNav();
        return view('kabupaten/kabIkuKemiskinanDataBps',['data'=>$users, 'data1'=>$tableau]);
    }
}
