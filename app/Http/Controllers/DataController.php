<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
use App\Jabatan;
use App\Kabupaten;
use App\Level;
use App\Provinsi;
use App\Satda;
use App\Skpd;
use App\User;
use Alert;
use Auth;
use Redirect;


class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //data table user for admin
    public function dataTable()
    {
        if(Auth::user()->level_id == 2){
            $level = 4;
        }elseif(Auth::user()->level_id == 3){
            $level = 5;
        }
        $users = DB::table('users')
            ->join('satda', 'users.satda_id', '=' ,'satda.id_satda')
            ->join('level' ,'users.level_id' ,'=', 'level.id_level')
            ->select('users.id', 'users.name', 'users.nip', 'users.satda_id', 'users.jabatan_id', 'users.level_id', 'satda.name_satda', 'level.name_level')
            ->where('users.level_id', '=', $level)
            ->get();
        return DataTables::of($users)
            ->addColumn('action', function ($users) {
                return view('layouts.partials._action2', [
                    'model' => $users,
                    'show_url' =>'#',
                    'edit_url' => route('users.edit', $users->id),
                    'delete_url' => route('users.destroy', $users->id),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    //data table user All
    public function dataTableAll()
    {
        $iduser = Auth::user()->id;
        $users = DB::table('users')
            ->join('satda', 'users.satda_id', '=' ,'satda.id_satda')
            ->join('level' ,'users.level_id' ,'=', 'level.id_level')
            ->select('users.id', 'users.name', 'users.nip', 'users.satda_id', 'users.jabatan_id', 'users.level_id', 'satda.name_satda', 'level.name_level')
            ->where('users.id', '!=', $iduser)
            ->get();
        return DataTables::of($users)
            ->addColumn('action', function ($users) {
                return view('layouts.partials._action2', [
                    'model' => $users,
                    'show_url' =>'#',
                    'edit_url' => route('users.edit', $users->id),
                    'delete_url' => route('users.destroy', $users->id),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    //data table user for superAdmin user admin prov
    public function dataTableAdminProv()
    {
        $users = DB::table('users')
            ->join('provinsi', 'users.provinsi_id', '=', 'provinsi.id_provinsi')
            ->join('kabupaten', 'users.kabupaten_id', '=', 'kabupaten.id_kabupaten')
            ->join('satda', 'users.satda_id', '=' ,'satda.id_satda')
            ->join('skpd', 'users.skpd_id', '=', 'skpd.id_skpd')
            ->join('level' ,'users.level_id' ,'=', 'level.id_level')
            ->select('users.id', 'users.name', 'users.nip', 'provinsi.nama_provinsi', 'kabupaten.nama_kabupaten', 'satda.name_satda', 'skpd.name_skpd', 'level.name_level')
            ->where('users.level_id', '=', 2)
            ->get();
        return DataTables::of($users)
            ->addColumn('action', function ($users) {
                return view('layouts.partials._action2', [
                    'model' => $users,
                    'show_url' =>'#',
                    'edit_url' => route('users.edit', $users->id),
                    'delete_url' => route('users.destroy', $users->id),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    //data table user for superAdmin user admin kab/kot
    public function dataTableAdminKab()
    {
        $users = DB::table('users')
            ->join('provinsi', 'users.provinsi_id', '=', 'provinsi.id_provinsi')
            ->join('kabupaten', 'users.kabupaten_id', '=', 'kabupaten.id_kabupaten')
            ->join('satda', 'users.satda_id', '=' ,'satda.id_satda')
            ->join('skpd', 'users.skpd_id', '=', 'skpd.id_skpd')
            ->join('level' ,'users.level_id' ,'=', 'level.id_level')
            ->select('users.id', 'users.name', 'users.nip', 'provinsi.nama_provinsi', 'kabupaten.nama_kabupaten', 'satda.name_satda', 'skpd.name_skpd', 'level.name_level')
            ->where('users.level_id', '=', 3)
            ->get();
        return DataTables::of($users)
            ->addColumn('action', function ($users) {
                return view('layouts.partials._action2', [
                    'model' => $users,
                    'show_url' =>'#',
                    'edit_url' => route('users.edit', $users->id),
                    'delete_url' => route('users.destroy', $users->id),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    //data table user for superAdmin user prov
    public function dataTableUserProv()
    {
        $users = DB::table('users')
            ->join('provinsi', 'users.provinsi_id', '=', 'provinsi.id_provinsi')
            ->join('kabupaten', 'users.kabupaten_id', '=', 'kabupaten.id_kabupaten')
            ->join('satda', 'users.satda_id', '=' ,'satda.id_satda')
            ->join('skpd', 'users.skpd_id', '=', 'skpd.id_skpd')
            ->join('level' ,'users.level_id' ,'=', 'level.id_level')
            ->select('users.id', 'users.name', 'users.nip', 'provinsi.nama_provinsi', 'kabupaten.nama_kabupaten', 'satda.name_satda', 'skpd.name_skpd', 'level.name_level')
            ->where('users.level_id', '=', 4)
            ->get();
        return DataTables::of($users)
            ->addColumn('action', function ($users) {
                return view('layouts.partials._action2', [
                    'model' => $users,
                    'show_url' =>'#',
                    'edit_url' => route('users.edit', $users->id),
                    'delete_url' => route('users.destroy', $users->id),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    //data table user for superAdmin user kab
    public function dataTableUserKab()
    {
        $users = DB::table('users')
            ->join('provinsi', 'users.provinsi_id', '=', 'provinsi.id_provinsi')
            ->join('kabupaten', 'users.kabupaten_id', '=', 'kabupaten.id_kabupaten')
            ->join('satda', 'users.satda_id', '=' ,'satda.id_satda')
            ->join('skpd', 'users.skpd_id', '=', 'skpd.id_skpd')
            ->join('level' ,'users.level_id' ,'=', 'level.id_level')
            ->select('users.id', 'users.name', 'users.nip', 'provinsi.nama_provinsi', 'kabupaten.nama_kabupaten', 'satda.name_satda', 'skpd.name_skpd', 'level.name_level')
            ->where('users.level_id', '=', 5)
            ->get();        
        return DataTables::of($users)
            ->addColumn('action', function ($users) {
                return view('layouts.partials._action2', [
                    'model' => $users,
                    'show_url' =>'#',
                    'edit_url' => route('users.edit', $users->id),
                    'delete_url' => route('users.destroy', $users->id),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}