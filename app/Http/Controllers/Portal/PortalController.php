<?php

namespace App\Http\Controllers\Portal;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Tableau;

class PortalController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
        $this->tableau = DB::table('tableau')
            ->select('username', 'password')
            ->first();
    }
    
    public function index()
    {
        //
    }

    public function izin(){
        return view('portal/portal_izin',
        [
            'data'=>$this->tableau
        ]);
    }

    public function penduduk(){
        return view('portal/portal_kependudukan',
        [
            'data'=>$this->tableau
        ]);
    }

    public function kemiskinan(){
        return view('portal/portal_kemiskinan',
        [
            'data'=>$this->tableau
        ]);
    }
}
