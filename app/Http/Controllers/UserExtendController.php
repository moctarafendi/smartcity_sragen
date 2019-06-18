<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;
use App\Kabupaten;
use App\Level;
use App\Provinsi;
use App\Satda;
use App\Skpd;
use App\User;
use Alert;
use Auth;
use Redirect;

class UserExtendController extends Controller
{
    //Show List All User for super admin
    public function listUsers()
    {
        $users = $this->apiHeaderNav();
        return view('user.userListAll',['data'=>$users]);
    }

    //Show List AdminProv for super admin 
    public function listAdmProv()
    {
        $users = $this->apiHeaderNav();
        return view('user.userListForAdmProv',['data'=>$users]);
    }

    //Show List AdminKab For SuperAdmin
    public function listAdmKab()
    {      
        $users = $this->apiHeaderNav();
        return view('user.userListForAdmKab',['data'=>$users]);
    }

    //Show List UserProv For SuperAdmin
    public function listUserProv()
    {      
        $users = $this->apiHeaderNav();
        return view('user.userListForAdmUserProv',['data'=>$users]);
    }

    //Show List AdminKab For SuperAdmin
    public function listUserKab()
    {      
        $users = $this->apiHeaderNav();
        return view('user.userListForAdmUserKab',['data'=>$users]);
    }

    //Select Kabupaten User
    public function selectAjaxKabUser(Request $request)
    {
    	if($request->ajax()){
            $kabupaten = DB::table('kabupaten')
                ->where('provinsi_id', $request->provinsi_id)
                ->pluck("nama_kabupaten", "id_kabupaten")
                ->all();
            $dataKab = view('select.ajaxSelectUserKab',compact('kabupaten'))->render();
    		return response()->json(['options'=>$dataKab]);
    	}
    }

    //Select Satda User
    public function selectAjaxSatdaUser(Request $request)
    {
    	if($request->ajax()){
            $satda = DB::table('satda')
                ->where('kabupaten_id',$request->kabupaten_id)
                ->pluck("name_satda", "id_satda")
                ->all();
            $dataSatda = view('select.ajaxSelectUserSatda',compact('satda'))->render();
    		return response()->json(['options'=>$dataSatda]);
    	}
    }

    //Select Skpd User
    public function selectAjaxSkpdUser(Request $request)
    {
    	if($request->ajax()){
            $skpd = DB::table('skpd')
                ->where('satda_id',$request->satda_id)
                ->pluck("name_skpd", "id_skpd")
                ->all();
    		$dataSkpd = view('select.ajaxSelectUserSkpd',compact('skpd'))->render();
    		return response()->json(['options'=>$dataSkpd]);
    	}
    }
}
