<?php

namespace App\Http\Controllers\Kabupaten;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Tableau;

class IkuIzinStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $this->pageViews(3);
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
            
        $users = $this->apiHeaderNav();
        return view('kabupaten/kabIkuIzinStatus',['data'=>$users, 'data1'=>$tableau]);
    }
}
