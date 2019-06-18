<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Indikator;
use App\Kabupaten;
use App\Level;
use App\Otda;
use App\Provinsi;
use App\Satda;
use App\Skpd;
use App\Tableau;
use App\User;
use Alert;
use Auth;
use Redirect;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $level = Auth::user()->level_id;
        $users = $this->apiHeaderNav();
        $tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
        $users_jumlah = DB::table('level')
            ->select('level.id_level', 'level.name_level', DB::raw('(COUNT(users.id)) as total_user'))
            ->leftJoin('users', 'users.level_id', '=', 'level.id_level')
            ->groupBy('level.id_level')
            ->orderBy('level.id_level', 'asc')
            ->get()->toArray();
        $users_jumlah = array_column($users_jumlah, 'total_user');
        $level_name = DB::table('level')
            ->select('name_level')
            ->groupBy('id_level')
            ->get()->toArray();
        $level_name = array_column($level_name, 'name_level');
        if($level == '1'){
            $count_otda=DB::table('otda')->count();
            $count_satda=DB::table('satda')->count();
            $count_skpd=DB::table('skpd')->count();
            $count_indikator=DB::table('indikator')->count();
            return view('admin.adminHome',[
                    'data'=>$users,
                    'otda'=>$count_otda, 
                    'satda'=>$count_satda, 
                    'skpd'=>$count_skpd, 
                    'indi'=>$count_indikator
            ])
            ->with('level_name',json_encode($level_name,JSON_NUMERIC_CHECK))
            ->with('users_jumlah',json_encode($users_jumlah,JSON_NUMERIC_CHECK));
        }else if(($level == '2')||($level == '4')){
            return view('provinsi.provHome',[
                'data'=>$users,
                'data1'=>$tableau
            ]);
        }else if(($level == '3')||($level == '5')){
            return view('kabupaten.kabHome',[
                'data'=>$users,
                'data1'=>$tableau
            ]);
        }
    }
}
