<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\Indikator;
use App\Kabupaten;
use App\Level;
use App\Otda;
use App\Perda;
use App\Provinsi;
use App\Satda;
use App\Skpd;
use App\User;
use Alert;
use Auth;
use Redirect;

class IndikatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = $this->apiHeaderNav();
        return view('admin.indikatorList',['data'=>$users]);
    }
    
    public function create()
    {
        $users = $this->apiHeaderNav();
        $provinsi = Provinsi::pluck('nama_provinsi', 'id_provinsi');
        $kabupaten = Kabupaten::pluck('nama_kabupaten', 'id_kabupaten');
        $skpd = Skpd::pluck('name_skpd', 'id_skpd');
        $otda = Otda::pluck('name_otda', 'id_otda');
        return view('admin.indikatorAdd',
            [
                'data' => $users,
                'provinsi' => $provinsi,
                'kabupaten' => $kabupaten,
                'skpd' => $skpd,
                'otda' => $otda
            ]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_indikator' => 'string',
            'skpd_id' => 'required',
            'otda_id' => 'required',
            'referensi' => 'string',
            'data_1' => 'string',
            'data_2' => 'string'
        ]);
        Indikator::create($request->all());
        Alert::success('Berhasil Menambahkan Indikator');
        return redirect()->route('indikator.index');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $users = $this->apiHeaderNav();
        $indi = Indikator::findOrFail($id);
        $provinsi = Provinsi::pluck('nama_provinsi', 'id_provinsi');
        $kabupaten = Kabupaten::pluck('nama_kabupaten', 'id_kabupaten');
        $skpd = Skpd::pluck('name_skpd', 'id_skpd');
        $otd = Otda::pluck('name_otda', 'id_otda');
        return view('admin.indikatorEdit', 
            [
                'data'=>$users,
                'provinsi' => $provinsi,
                'kabupaten' => $kabupaten,
                'indi'=>$indi,
                'skpd'=>$skpd,
                'otd'=>$otd
            ]);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_indikator' => 'string',
            'skpd_id' => 'required',
            'otda_id' => 'required',
            'referensi' => 'string',
            'data_1' => 'string',
            'data_2' => 'string'
        ]);
        $indi = Indikator::findOrFail($id);
        $indi->update($request->all());
        Alert::success('Berhasil Mengubah Data Indikator!');
        return view('admin.indikatorList',['data'=>$users]);
    }
    
    public function destroy($id_indikator)
    {
        if (! Indikator::destroy($id_indikator)){
            return redirect()->back();
        }
        Alert::success('Berhasil Menghapus indikator!');
        return redirect()->route('indikator.index');
    }
    
    //List data table Indikator
    public function dataTable()
    {
        $indikator = DB::table('indikator')
        ->join('skpd','indikator.skpd_id','=','skpd.id_skpd')
        ->join('otda','indikator.otda_id','=','otda.id_otda')
        ->select('indikator.*','skpd.name_skpd','otda.name_otda')
        ->get();        
        return DataTables::of($indikator)
            ->addColumn('action', function ($indikator) {
                return view('layouts.partials._action3', [
                    'model' => $indikator,
                    'show_url' =>'#',
                    'edit_url' => route('indikator.edit', $indikator->id_indikator),
                    'delete_url' => route('indikator.destroy', $indikator->id_indikator),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
