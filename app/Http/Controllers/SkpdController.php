<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\Jabatan;
use App\Kabupaten;
use App\Level;
use App\Perda;
use App\Provinsi;
use App\Satda;
use App\SatdaKategori;
use App\Skpd;
use App\User;
use Alert;
use Auth;
use Redirect;

class SkpdController extends Controller
{
    //List All SKPD
    public function index()
    {
        $users = $this->apiHeaderNav();
        return view('admin.skpdList',['data'=>$users]);
    }
    //List SKPD Prov
    public function listSkpdProv()
    {
        $users = $this->apiHeaderNav();
        return view('admin.skpdListProv',['data'=>$users]);
    }
    //List SKPD Kab
    public function listSkpdKab()
    {
        $users = $this->apiHeaderNav();
        return view('admin.skpdListKab',['data'=>$users]);
    }
    
    public function create()
    {
        $users = $this->apiHeaderNav();
        $skpd = new Skpd;
        if(Auth::user()->level_id == 1){
            $provinsi = Provinsi::pluck('nama_provinsi', 'id_provinsi');
            $kabupaten = Kabupaten::pluck('nama_kabupaten', 'id_kabupaten');
            $satda = Satda::pluck('name_satda', 'id_satda');
            $perda = Perda::pluck('name_perda', 'id_perda');
            return view('admin.skpdAdd',
                [
                    'data' => $users,
                    'skpd' => $skpd,
                    'provinsi' => $provinsi,
                    'kabupaten' => $kabupaten,
                    'satda' => $satda, 
                    'perda' => $perda
                ]);
        }elseif(Auth::user()->level_id == 2){
            $satda = DB::table('satda')
                ->leftJoin('provinsi', 'satda.provinsi_id', '=' ,'provinsi.id_provinsi')
                ->leftJoin('kabupaten','satda.kabupaten_id', '=' ,'kabupaten.id_kabupaten')
                ->select('satda.*','provinsi.nama_provinsi', 'kabupaten.nama_kabupaten')
                ->where('satda.provinsi_id', '!=', null)
                ->where('satda.kategori_satda_id', '=', 1)
                ->where('satda.provinsi_id', '=', Auth::user()->provinsi_id)
                ->pluck('name_satda', 'id_satda');
            $perda = Perda::pluck('name_perda', 'id_perda');
            return view('admin.skpdAddProv',
                [
                    'data' => $users,
                    'skpd' => $skpd,
                    'satda' => $satda, 
                    'perda' => $perda
                ]);
        }elseif(Auth::user()->level_id == 3){
            $satda = DB::table('satda')
                ->leftJoin('provinsi', 'satda.provinsi_id', '=' ,'provinsi.id_provinsi')
                ->leftJoin('kabupaten','satda.kabupaten_id', '=' ,'kabupaten.id_kabupaten')
                ->select('satda.*','provinsi.nama_provinsi', 'kabupaten.nama_kabupaten')
                ->WHERE('satda.kabupaten_id', '!=', null)
                ->WHERE('satda.kategori_satda_id', '=', 2)
                ->where('satda.kabupaten_id', '=', Auth::user()->kabupaten_id)
                ->pluck('name_satda', 'id_satda'); 
            $perda = Perda::pluck('name_perda', 'id_perda');
            return view('admin.skpdAddKab',
                [
                    'data' => $users,
                    'skpd' => $skpd,
                    'satda' => $satda,
                    'perda' => $perda
                ]);
        }
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_skpd' => 'required|string|max:255',
            'satda_id'=> 'required',
            'perda_id'=> 'required',
        ]);
        if(Auth::user()->level_id == 1){
            if($request->kabupaten_id==null && $request->provinsi_id!=null){
                Skpd::create($request->all());
                Alert::success('Berhasil Menambahkan SKPD!');
                return redirect()->route('skpdListProv');
            }elseif($request->provinsi_id==null && $request->kabupaten_id!=null){
                Skpd::create($request->all());
                Alert::success('Berhasil Menambahkan SKPD!');
                return redirect()->route('skpdListKab');
            }elseif($request->kabupaten_id==null && $request->provinsi_id==null){
                Alert::error('Gagal Menambahkan SKPD');
                return redirect()->back();
            }else{
                Alert::error('Gagal Menambahkan SKPD');
                return redirect()->back();
            }
        }elseif(Auth::user()->level_id == 2){
            Skpd::create($request->all());
            Alert::success('Berhasil Menambahkan SKPD!');
            return redirect()->route('skpdListProv');
        }elseif(Auth::user()->level_id == 3){
            Skpd::create($request->all());
            Alert::success('Berhasil Menambahkan SKPD!');
            return redirect()->route('skpdListKab');
        }
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $users = $this->apiHeaderNav();
        $skpd = Skpd::findOrFail($id);
        if(Auth::user()->level_id == 1){
            $provinsi = Provinsi::pluck('nama_provinsi', 'id_provinsi');
            $kabupaten = Kabupaten::pluck('nama_kabupaten', 'id_kabupaten');
            $satda = Satda::pluck('name_satda', 'id_satda');
            $perda = Perda::pluck('name_perda', 'id_perda');
            return view('admin.skpdEdit',
                [
                    'data' => $users,
                    'skpd' => $skpd,
                    'provinsi' => $provinsi,
                    'kabupaten' => $kabupaten,
                    'satda' => $satda, 
                    'perda' => $perda
                ]);
        }elseif(Auth::user()->level_id == 2){
            $satda = DB::table('satda')
                ->leftJoin('provinsi', 'satda.provinsi_id', '=' ,'provinsi.id_provinsi')
                ->leftJoin('kabupaten','satda.kabupaten_id', '=' ,'kabupaten.id_kabupaten')
                ->select('satda.*','provinsi.nama_provinsi', 'kabupaten.nama_kabupaten')
                ->where('satda.provinsi_id', '!=', null)
                ->where('satda.kategori_satda_id', '=', 1)
                ->where('satda.provinsi_id', '=', Auth::user()->provinsi_id)
                ->pluck('name_satda', 'id_satda');
            $perda = Perda::pluck('name_perda', 'id_perda');
            return view('admin.skpdEditProv', 
            [
                'data' => $users,
                'skpd' => $skpd,
                'satda' => $satda, 
                'perda' => $perda
            ]);
        }elseif(Auth::user()->level_id == 3){
            $satda = DB::table('satda')
                ->leftJoin('provinsi', 'satda.provinsi_id', '=' ,'provinsi.id_provinsi')
                ->leftJoin('kabupaten','satda.kabupaten_id', '=' ,'kabupaten.id_kabupaten')
                ->select('satda.*','provinsi.nama_provinsi', 'kabupaten.nama_kabupaten')
                ->WHERE('satda.kabupaten_id', '!=', null)
                ->WHERE('satda.kategori_satda_id', '=', 2)
                ->where('satda.kabupaten_id', '=', Auth::user()->kabupaten_id)
                ->pluck('name_satda', 'id_satda'); 
            $perda = Perda::pluck('name_perda', 'id_perda');
            return view('admin.skpdEditKab', 
            [
                'data' => $users,
                'skpd' => $skpd,
                'satda' => $satda, 
                'perda' => $perda
            ]);
        }
    }
    
    public function update(Request $request, $id)
    {
        $users = $this->apiHeaderNav();
        $this->validate($request, [
            'name_skpd' => 'required|string|max:255',
            'satda_id' => 'required',
            'perda_id' => 'required'
        ]);
        if(Auth::user()->level_id == 1){
            if($request->kabupaten_id==null && $request->provinsi_id!=null){
                $skpd = Skpd::findOrFail($id);
                $skpd->update($request->all());
                Alert::success('Berhasil Mengubah Data SKPD!');
                return view('admin.skpdListProv',['data'=>$users]);
            }elseif($request->provinsi_id==null && $request->kabupaten_id!=null){
                $skpd = Skpd::findOrFail($id);
                $skpd->update($request->all());
                Alert::success('Berhasil Mengubah Data SKPD!');
                return view('admin.skpdListKab',['data'=>$users]);
            }elseif($request->provinsi_id==null && $request->kabupaten_id==null){
                Alert::error('Gagal Mengubah Data SKPD');
                return redirect()->back();
            }else{
                Alert::error('Gagal Mengubah Data SKPD');
                return redirect()->back();
            }
        }elseif(Auth::user()->level_id == 2){
            $skpd = Skpd::findOrFail($id);
            $skpd->update($request->all());
            Alert::success('Berhasil Mengubah Data SKPD!');
            return view('admin.skpdListProv',['data'=>$users]);
        }
        elseif(Auth::user()->level_id == 3){
            $skpd = Skpd::findOrFail($id);
            $skpd->update($request->all());
            Alert::success('Berhasil Mengubah Data SKPD!');
            return view('admin.skpdListKab',['data'=>$users]);
        }
    }
    
    public function destroy($id_skpd)
    {
        if(Auth::user()->level_id == 1){
            if (!Skpd::destroy($id_skpd)){
                return redirect()->back();
            }
            Alert::success('Berhasil Menghapus SKPD!');
            return redirect()->back();
        }elseif(Auth::user()->level_id == 2){
            if (!Skpd::destroy($id_skpd)){
                return redirect()->back();
            }
            Alert::success('Berhasil Menghapus SKPD!');
            return redirect()->route('skpdListProv');
        }elseif(Auth::user()->level_id == 3){
            if (!Skpd::destroy($id_skpd)){
                return redirect()->back();
            }
            Alert::success('Berhasil Menghapus SKPD!');
            return redirect()->route('skpdListKab');
        }
    }
    //List data table SkpdAll
    public function dataTable()
    {
        $skpd = DB::table('skpd')
            ->join('perda', 'skpd.perda_id', '=' ,'perda.id_perda')
            ->join('satda','skpd.satda_id', '=' ,'satda.id_satda')
            ->select('skpd.*', 'perda.name_perda', 'satda.name_satda')
            ->get();        
        return DataTables::of($skpd)
            ->addColumn('action', function ($skpd) {
                return view('layouts.partials._action2', [
                    'model' => $skpd,
                    'show_url' =>'#',
                    'edit_url' => route('skpd.edit', $skpd->id_skpd),
                    'delete_url' => route('skpd.destroy', $skpd->id_skpd),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    //List data table SkpdProv
    public function dataTableProv()
    {
        if(Auth::user()->level_id == 1){
            $skpd = DB::table('skpd')
                ->join('perda', 'skpd.perda_id', '=' ,'perda.id_perda')
                ->join('satda','skpd.satda_id', '=' ,'satda.id_satda')
                ->select('skpd.*', 'perda.name_perda', 'satda.name_satda')
                ->WHERE('satda.kategori_satda_id', '=', 1)
                ->get();
        }elseif(Auth::user()->level_id == 2){
            $skpd = DB::table('skpd')
                ->join('perda', 'skpd.perda_id', '=' ,'perda.id_perda')
                ->join('satda','skpd.satda_id', '=' ,'satda.id_satda')
                ->select('skpd.*', 'perda.name_perda', 'satda.name_satda')
                ->WHERE('satda.kategori_satda_id', '=', 1)
                ->where('satda.provinsi_id', '=', Auth::user()->provinsi_id)
                ->get();
        }
        return DataTables::of($skpd)
            ->addColumn('action', function ($skpd) {
                return view('layouts.partials._action2', [
                    'model' => $skpd,
                    'show_url' =>'#',
                    'edit_url' => route('skpd.edit', $skpd->id_skpd),
                    'delete_url' => route('skpd.destroy', $skpd->id_skpd),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    //List data table SkpdKab
    public function dataTableKab()
    {
        if(Auth::user()->level_id == 1){
            $skpd = DB::table('skpd')
                ->join('perda', 'skpd.perda_id', '=' ,'perda.id_perda')
                ->join('satda','skpd.satda_id', '=' ,'satda.id_satda')
                ->select('skpd.*', 'perda.name_perda', 'satda.name_satda')
                ->WHERE('satda.kategori_satda_id', '=', 2)
                ->get();
        }elseif(Auth::user()->level_id == 3){
            $skpd = DB::table('skpd')
                ->join('perda', 'skpd.perda_id', '=' ,'perda.id_perda')
                ->join('satda','skpd.satda_id', '=' ,'satda.id_satda')
                ->select('skpd.*', 'perda.name_perda', 'satda.name_satda')
                ->WHERE('satda.kategori_satda_id', '=', 2)
                ->where('satda.kabupaten_id', '=', Auth::user()->kabupaten_id)
                ->get();
        }      
        return DataTables::of($skpd)
            ->addColumn('action', function ($skpd) {
                return view('layouts.partials._action2', [
                    'model' => $skpd,
                    'show_url' =>'#',
                    'edit_url' => route('skpd.edit', $skpd->id_skpd),
                    'delete_url' => route('skpd.destroy', $skpd->id_skpd),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}