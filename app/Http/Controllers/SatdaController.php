<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\Kabupaten;
use App\Level;
use App\Provinsi;
use App\Satda;
use App\SatdaKategori;
use App\User;
use Alert;
use Auth;
use Redirect;

$require = 'required';

class SatdaController extends Controller
{
    //List All Satda
    public function index()
    {
        $users = $this->apiHeaderNav();
        return view('admin.satdaList',['data'=>$users]);
    }
    //List Satda Prov
    public function listSatdaProv()
    {
        $users = $this->apiHeaderNav();
        return view('admin.satdaListProv',['data'=>$users]);
    }
    //List Satda Kab
    public function listSatdaKab()
    {
        $users = $this->apiHeaderNav();
        return view('admin.satdaListKab',['data'=>$users]);
    }
    
    public function create()
    {
        $users = $this->apiHeaderNav();
        $satda = new Satda;
        if(Auth::user()->level_id == 1){
            $kategori = SatdaKategori::pluck('name_kategori_satda','id_satda_kategori');
            $provinsi = Provinsi::pluck('nama_provinsi', 'id_provinsi');
            $kabupaten = Kabupaten::pluck('nama_kabupaten', 'id_kabupaten');
            return view('admin.satdaAdd',
            [
                'data'=>$users,
                'kategori'=>$kategori,
                'provinsi' => $provinsi, 
                'kabupaten' => $kabupaten,
                'satda' =>$satda
            ]);
        }elseif(Auth::user()->level_id == 2){
            $kategori = SatdaKategori::where('id_satda_kategori',1)->pluck('name_kategori_satda','id_satda_kategori');
            $provinsi = Provinsi::where('id_provinsi',Auth::user()->provinsi_id)->pluck('nama_provinsi', 'id_provinsi');
            return view('admin.satdaAddProv',
            [
                'data'=>$users,
                'kategori'=>$kategori,
                'provinsi' => $provinsi,
                'satda' =>$satda
            ]);
        }elseif(Auth::user()->level_id == 3){
            $kategori = SatdaKategori::where('id_satda_kategori',2)->pluck('name_kategori_satda','id_satda_kategori');
            $kabupaten = Kabupaten::where('id_kabupaten',Auth::user()->kabupaten_id)->pluck('nama_kabupaten', 'id_kabupaten');
            return view('admin.satdaAddKab',
            [
                'data'=>$users,
                'kategori'=>$kategori,
                'kabupaten' => $kabupaten,
                'satda' =>$satda
            ]);
        }
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori_satda_id' => 'required',
            'name_satda' => 'required|string|max:255'
        ]);
        if(Auth::user()->level_id == 1){
            if($request->kabupaten_id==null && $request->provinsi_id!=null){
                Satda::create($request->all());
                Alert::success('Berhasil Menambahkan SATDA');
                return redirect()->route('satdaListProv');
            }elseif($request->provinsi_id==null && $request->kabupaten_id!=null){
                Satda::create($request->all());
                Alert::success('Berhasil Menambahkan SATDA');
                return redirect()->route('satdaListKab');
            }elseif($request->kabupaten_id==null && $request->provinsi_id==null){
                Alert::error('Gagal Menambahkan SATDA');
                return redirect()->back();
            }else{
                Alert::error('Gagal Menambahkan SATDA');
                return redirect()->back();
            }
        }elseif(Auth::user()->level_id == 2){
            Satda::create($request->all());
            Alert::success('Berhasil Menambahkan SATDA');
            return redirect()->route('satdaListProv');
        }elseif(Auth::user()->level_id == 3){
            Satda::create($request->all());
            Alert::success('Berhasil Menambahkan SATDA');
            return redirect()->route('satdaListKab');
        }
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $users = $this->apiHeaderNav();
        $std = Satda::findOrFail($id);
        if(Auth::user()->level_id == 1){
            $kategori = SatdaKategori::pluck('name_kategori_satda','id_satda_kategori');
            $provinsi = Provinsi::pluck('nama_provinsi', 'id_provinsi');
            $kabupaten = Kabupaten::pluck('nama_kabupaten', 'id_kabupaten');
            return view('admin.satdaEdit', 
            [
                'data'=>$users, 
                'std'=>$std,
                'kategori'=>$kategori,
                'provinsi' => $provinsi,
                'kabupaten' =>$kabupaten
            ]);
        }elseif(Auth::user()->level_id == 2){
            $kategori = SatdaKategori::where('id_satda_kategori',1)->pluck('name_kategori_satda','id_satda_kategori');
            $provinsi = Provinsi::where('id_provinsi',Auth::user()->provinsi_id)->pluck('nama_provinsi', 'id_provinsi');
            return view('admin.satdaEditProv', 
            [
                'data'=>$users, 
                'std'=>$std,
                'kategori'=>$kategori,
                'provinsi' => $provinsi
            ]);
        }elseif(Auth::user()->level_id == 3){
            $kategori = SatdaKategori::where('id_satda_kategori',2)->pluck('name_kategori_satda','id_satda_kategori');
            $kabupaten = Kabupaten::where('id_kabupaten',Auth::user()->kabupaten_id)->pluck('nama_kabupaten', 'id_kabupaten');
            return view('admin.satdaEditKab', 
            [
                'data'=>$users, 
                'std'=>$std,
                'kategori'=>$kategori,
                'kabupaten' => $kabupaten
            ]);
        }
    }
    
    public function update(Request $request, $id)
    {
        $users = $this->apiHeaderNav();
        $this->validate($request, [
            'kategori_satda_id' => 'required',
            'name_satda' => 'required|string|max:255'
        ]);
        if(Auth::user()->level_id == 1){
            if($request->kabupaten_id==null && $request->provinsi_id!=null){
                $std = Satda::findOrFail($id);
                $std->update($request->all());
                Alert::success('Berhasil Mengubah Data SATDA');
                return redirect()->route('satdaListProv');
            }elseif($request->provinsi_id==null && $request->kabupaten_id!=null){
                $std = Satda::findOrFail($id);
                $std->update($request->all());
                Alert::success('Berhasil Mengubah Data SATDA');
                return redirect()->route('satdaListKab');
            }elseif($request->provinsi_id==null && $request->kabupaten_id==null){
                Alert::error('Gagal Mengubah Data SATDA');
                return redirect()->back();
            }else{
                Alert::error('Gagal Mengubah Data SATDA');
                return redirect()->back();
            }
        }elseif(Auth::user()->level_id == 2){
            $std = Satda::findOrFail($id);
            $std->update($request->all());
            Alert::success('Berhasil Mengubah Data SATDA');
            return view('admin.satdaListProv',['data'=>$users]);
        }elseif(Auth::user()->level_id == 3){
            $std = Satda::findOrFail($id);
            $std->update($request->all());
            Alert::success('Berhasil Mengubah Data SATDA');
            return view('admin.satdaListKab',['data'=>$users]);
        }
    }
    
    public function destroy($id_satda)
    {
        if(Auth::user()->level_id == 1){
            if (! Satda::destroy($id_satda)) {
                return redirect()->back();
            }
            Alert::success('Berhasil Menghapus Satda');
            return redirect()->back();
        }elseif(Auth::user()->level_id == 2){
            if (! Satda::destroy($id_satda)) {
                return redirect()->back();
            }
            Alert::success('Berhasil Menghapus Satda');
            return redirect()->route('satdaListProv');
        }elseif(Auth::user()->level_id == 3){
            if (! Satda::destroy($id_satda)) {
                return redirect()->back();
            }
            Alert::success('Berhasil Menghapus Satda');
            return redirect()->route('satdaListKab');
        }
    }
    //List data table SatdaAll
    public function dataTable()
    {
        $satda = DB::table('satda')
            ->leftJoin('provinsi', 'satda.provinsi_id', '=' ,'provinsi.id_provinsi')
            ->leftJoin('kabupaten','satda.kabupaten_id', '=' ,'kabupaten.id_kabupaten')
            ->select('satda.*','provinsi.nama_provinsi', 'kabupaten.nama_kabupaten')
            ->get();        
        return DataTables::of($satda)
            ->addColumn('action', function ($satda) {
                return view('layouts.partials._action', [
                    'model' => $satda,
                    'show_url' =>'#',
                    'edit_url' => route('satda.edit', $satda->id_satda),
                    'delete_url' => route('satda.destroy', $satda->id_satda),
                ]);
        })
        ->rawColumns(['action'])
        ->make(true);
    }
    //List data table SatdaProv
    public function dataTableProv()
    {
        if(Auth::user()->level_id == 1){
            $satda = DB::table('satda')
                ->leftJoin('provinsi', 'satda.provinsi_id', '=' ,'provinsi.id_provinsi')
                ->leftJoin('kabupaten','satda.kabupaten_id', '=' ,'kabupaten.id_kabupaten')
                ->select('satda.*','provinsi.nama_provinsi', 'kabupaten.nama_kabupaten')
                ->where('satda.provinsi_id', '!=', null)
                ->where('satda.kategori_satda_id', '=', 1)
                ->get();
        }elseif(Auth::user()->level_id == 2){
            $satda = DB::table('satda')
                ->leftJoin('provinsi', 'satda.provinsi_id', '=' ,'provinsi.id_provinsi')
                ->leftJoin('kabupaten','satda.kabupaten_id', '=' ,'kabupaten.id_kabupaten')
                ->select('satda.*','provinsi.nama_provinsi', 'kabupaten.nama_kabupaten')
                ->where('satda.provinsi_id', '!=', null)
                ->where('satda.kategori_satda_id', '=', 1)
                ->where('satda.provinsi_id', '=', Auth::user()->provinsi_id)
                ->get();
        }       
        return DataTables::of($satda)
            ->addColumn('action', function ($satda) {
                return view('layouts.partials._action2', [
                    'model' => $satda,
                    'show_url' =>'#',
                    'edit_url' => route('satda.edit', $satda->id_satda),
                    'delete_url' => route('satda.destroy', $satda->id_satda),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    //List data table SatdaKab
    public function dataTableKab()
    {
        if(Auth::user()->level_id == 1){
            $satda = DB::table('satda')
                ->leftJoin('provinsi', 'satda.provinsi_id', '=' ,'provinsi.id_provinsi')
                ->leftJoin('kabupaten','satda.kabupaten_id', '=' ,'kabupaten.id_kabupaten')
                ->select('satda.*','provinsi.nama_provinsi', 'kabupaten.nama_kabupaten')
                ->WHERE('satda.kabupaten_id', '!=', null)
                ->WHERE('satda.kategori_satda_id', '=', 2)
                ->get(); 
        }elseif(Auth::user()->level_id == 3){
            $satda = DB::table('satda')
                ->leftJoin('provinsi', 'satda.provinsi_id', '=' ,'provinsi.id_provinsi')
                ->leftJoin('kabupaten','satda.kabupaten_id', '=' ,'kabupaten.id_kabupaten')
                ->select('satda.*','provinsi.nama_provinsi', 'kabupaten.nama_kabupaten')
                ->WHERE('satda.kabupaten_id', '!=', null)
                ->WHERE('satda.kategori_satda_id', '=', 2)
                ->where('satda.kabupaten_id', '=', Auth::user()->kabupaten_id)
                ->get(); 
        }       
        return DataTables::of($satda)
            ->addColumn('action', function ($satda) {
                return view('layouts.partials._action2', [
                    'model' => $satda,
                    'show_url' =>'#',
                    'edit_url' => route('satda.edit', $satda->id_satda),
                    'delete_url' => route('satda.destroy', $satda->id_satda),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}