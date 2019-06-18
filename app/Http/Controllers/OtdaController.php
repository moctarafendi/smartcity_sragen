<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use App\Jabatan;
use App\Kabupaten;
use App\Level;
use App\Otda;
use App\Provinsi;
use App\Satda;
use App\Skpd;
use App\User;
use Alert;
use Auth;
use Redirect;

class OtdaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = $this->apiHeaderNav();
        return view('admin.otdaList',['data'=>$users]);
    }
    
    public function create()
    {
        $users = $this->apiHeaderNav();
        return view('admin.otdaAdd',['data'=>$users]);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_otda' => 'required|string|max:255'
        ]);
        Otda::create($request->all());
        Alert::success('Berhasil Menambahkan OTDA');
        return redirect()->route('otda.index');
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $users = $this->apiHeaderNav();
        $otd = Otda::findOrFail($id);
        return view('admin.otdaEdit', 
            [
                'data'=>$users, 
                'otda'=>$otd
            ]);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_otda' => 'required|string|max:255'
        ]);
        $users = $this->apiHeaderNav();
        $otd = Otda::findOrFail($id);
        $otd->update($request->all());
        Alert::success('Berhasil Mengubah Data OTDA');
        return view('admin.otdaList',['data'=>$users]);
    }
    
    public function destroy($id_otda)
    {
        if (! Otda::destroy($id_otda)){
            return redirect()->back();
        }
        Alert::success('Berhasil Menghapus OTDA');
        return redirect()->route('otda.index');
    }
    
    //List data table user
    public function dataTable()
    {
        $otda = DB::table('otda')->get();
        return DataTables::of($otda)
            ->addColumn('action', function ($otda) {
                return view('layouts.partials._action2', [
                    'model' => $otda,
                    'show_url' =>'#',
                    'edit_url' => route('otda.edit', $otda->id_otda),
                    'delete_url' => route('otda.destroy', $otda->id_otda),
                ]);
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
