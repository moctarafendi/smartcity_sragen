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


class UserController extends Controller
{

    //Show List User Page
    public function index()
    {
        $users = $this->apiHeaderNav();
        return view('user.userList',['data'=>$users]);
    }

    //Menampilkan form buat user baru
    public function create()
    {
        $user = new User;
        $users = $this->apiHeaderNav();
        $level = Auth::user()->level_id;
        if($level == 1){
            $lvl = Level::pluck('name_level', 'id_level');
            $provinsi = Provinsi::pluck('nama_provinsi', 'id_provinsi');
        }else if($level == 2){
            $lvl = Level::where('id_level', 4)->pluck('name_level', 'id_level');
            $provinsi = Provinsi::where('id_provinsi', Auth::user()->provinsi_id)->pluck('nama_provinsi', 'id_provinsi');
            $kabupaten = Kabupaten::where('id_kabupaten', Auth::user()->kabupaten_id)->pluck('nama_kabupaten', 'id_kabupaten');
            $satda2 = Satda::where('provinsi_id', Auth::user()->provinsi_id)->pluck('name_satda','id_satda');
        }else if($level==3){
            $lvl = Level::where('id_level', 5)->pluck('name_level', 'id_level');
            $provinsi = Provinsi::where('id_provinsi', Auth::user()->provinsi_id)->pluck('nama_provinsi', 'id_provinsi');
            $kabupaten = Kabupaten::where('id_kabupaten', Auth::user()->kabupaten_id)->pluck('nama_kabupaten', 'id_kabupaten');
            $satda2 = Satda::where('kabupaten_id', Auth::user()->kabupaten_id)->pluck('name_satda','id_satda');
        }
        if($level == 1){
            return view('user/userAdd', compact('provinsi'),
                [
                    'data' => $users, 
                    'level' => $lvl,
                    'user' =>$user
                ]);
        }elseif(($level == 2) || ($level == 3)){ 
            return view('user/userAdd',
                [
                    'data' => $users, 
                    'level' => $lvl,
                    'provinsi' => $provinsi,
                    'kabupaten' => $kabupaten, 
                    'satda'=> $satda2,
                    'user' =>$user
                ]);
        }
    }

    //store data user baru ke database
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'nip' => 'required',
            'level_id' => 'required',
            'provinsi_id'=> 'required',
            'kabupaten_id'=> 'required',
            'satda_id'=> 'required',
            'skpd_id'=> 'required',
            'phone' => 'required',
        ]);
        if($request->level_id == 2){
            $request['password'] = bcrypt($request->get('password'));
            User::create($request->all());
            Alert::success('Berhasil Menambahkan Pengguna');
            return redirect()->route('adminProvList');
        }elseif($request->level_id == 3){
            $request['password'] = bcrypt($request->get('password'));
            User::create($request->all());
            Alert::success('Berhasil Menambahkan Pengguna');
            return redirect()->route('adminKabList');
        }elseif($request->level_id == 4){
            $request['password'] = bcrypt($request->get('password'));
            User::create($request->all());
            Alert::success('Berhasil Menambahkan Pengguna');
            return redirect()->route('userProvList');
        }elseif($request->level_id == 5){
            $request['password'] = bcrypt($request->get('password'));
            User::create($request->all());
            Alert::success('Berhasil Menambahkan Pengguna');
            return redirect()->route('userKabList');
        }else{
            return redirect()->back();
        }
    }


    public function show($id)
    {
        //
    }


    //Show from edit data user
    public function edit($id)
    {
        $users = $this->apiHeaderNav();
        $usr = User::findOrFail($id);
        $level = Auth::user()->level_id;
        if($level==1){
            $lvl = Level::pluck('name_level', 'id_level');
            $provinsi = Provinsi::pluck('nama_provinsi', 'id_provinsi');
            $kabupaten = Kabupaten::where('provinsi_id',$usr->provinsi_id)->pluck('nama_kabupaten', 'id_kabupaten');
            if(($usr->level_id == 2)||($usr->level_id == 4)){
                $satda2 = Satda::where('provinsi_id',$usr->provinsi_id)->pluck('name_satda','id_satda');
            }
            elseif(($usr->level_id == 3)||($usr->level_id == 5)){
                $satda2 = Satda::where('kabupaten_id',$usr->kabupaten_id)->pluck('name_satda','id_satda');
            }
            $skpd2 = Skpd::where('satda_id',$usr->satda_id)->pluck('name_skpd','id_skpd');
        }else if($level==2){
            $lvl = Level::where('id_level', 4)->pluck('name_level', 'id_level');
            $provinsi = Provinsi::where('id_provinsi',$usr->provinsi_id)->pluck('nama_provinsi', 'id_provinsi');
            $kabupaten = Kabupaten::where('provinsi_id',$usr->kabupaten_id)->pluck('nama_kabupaten', 'id_kabupaten');
            $satda2 = Satda::where('satda.provinsi_id',$usr->provinsi_id)->pluck('name_satda','id_satda');
            $skpd2 = Skpd::where('skpd.satda_id',$usr->satda_id)->pluck('name_skpd','id_skpd');
        }else if($level==3){
            $lvl = Level::where('id_level', 5)->pluck('name_level', 'id_level');
            $provinsi = Provinsi::where('id_provinsi',$usr->provinsi_id)->pluck('nama_provinsi', 'id_provinsi');
            $kabupaten = Kabupaten::where('id_kabupaten',$usr->kabupaten_id)->pluck('nama_kabupaten', 'id_kabupaten');
            $satda2 = Satda::where('satda.kabupaten_id',$usr->kabupaten_id)->pluck('name_satda','id_satda');
            $skpd2 = Skpd::where('skpd.satda_id',$usr->satda_id)->pluck('name_skpd','id_skpd');
        }
        // $skpd2 = $join3->pluck('name_skpd','id_skpd');
        if($level==1){
            return view('user.userEdit', 
                [
                    'data'=>$users, 
                    'user'=>$usr, 
                    'level' =>$lvl,
                    'provinsi'=>$provinsi, 
                    'kabupaten'=>$kabupaten, 
                    'satda'=>$satda2, 
                    'skpd'=>$skpd2
                ]);
        }elseif(($level==2) || ($level==3)){
            return view('user.userEdit', 
                [
                    'data'=>$users, 
                    'user'=>$usr, 
                    'level' =>$lvl,
                    'provinsi'=>$provinsi, 
                    'kabupaten'=>$kabupaten, 
                    'satda'=>$satda2, 
                    'skpd'=>$skpd2
                ]);
        }
    }

    //Udapte data user
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'provinsi_id' => 'required',
            'kabupaten_id' => 'required',
            'satda_id' => 'required',
            'skpd_id'=> 'required',
            'nip' => 'required',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required',
            'level_id' => 'required'
        ]);
        if($request->level_id == 2){
            $user = User::findOrFail($id);
            $user->update($request->all());
            Alert::success('Berhasil Mengubah Data Pengguna!');
            return redirect()->route('adminProvList');
        }elseif($request->level_id == 3){    
            $user = User::findOrFail($id);
            $user->update($request->all());
            Alert::success('Berhasil Mengubah Data Pengguna!');
            return redirect()->route('adminKabList');
        }elseif($request->level_id == 4){
            $user = User::findOrFail($id);
            $user->update($request->all());
            Alert::success('Berhasil Mengubah Data Pengguna!');
            return redirect()->route('userProvList');
        }elseif($request->level_id == 5){
            $user = User::findOrFail($id);
            $user->update($request->all());
            Alert::success('Berhasil Mengubah Data Pengguna!');
            return redirect()->route('userKabList');
        }else{
            return redirect()->back();
        }
    }

    //delete a record
    public function destroy($id)
    {
        if (! User::destroy($id)) {
            return redirect()->back();   
        }
        Alert::success('Berhasil Menghapus Pengguna!');
        return redirect()->back(); 
    }

    //show profile
    public function profile()
    {
        $iduser = Auth::user()->id;
        $users = DB::table('users')
            ->join('provinsi', 'users.provinsi_id', '=', 'provinsi.id_provinsi')
            ->join('kabupaten', 'users.kabupaten_id', '=', 'kabupaten.id_kabupaten')
            ->join('skpd', 'users.skpd_id', '=', 'skpd.id_skpd')
            ->join('level', 'users.level_id', '=', 'level.id_level')
            ->select('users.*', 'provinsi.nama_provinsi', 'kabupaten.nama_kabupaten', 'skpd.name_skpd', 'level.name_level')
            ->where('users.id', '=', $iduser)
            ->first();
        return view('user.userProfile',['data'=>$users]);
    }

    //Show from ubah password
    public function editpass()
    {
        $users = $this->apiHeaderNav();
        return view('user/userPass',['data'=>$users]);
    }


    //Change Password
    public function changePassword(Request $request)
    {
        // Check Current Password and Your Input
        if ((Hash::check($request->get('current-password'), Auth::user()->password)) == 0) {
            Alert::error('Password anda saat ini tidak sesuai dengan password yang anda masukan');
            return redirect()->back();
        }
        // //Current password and new password are same
        if(strcmp($request->get('new_password'), $request->get('new_password_confirmation')) != 0){
            Alert::error('Periksa kembali password baru yang anda masukkan');
            return redirect()->back();
        }
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new_password' => 'required|string|min:6|confirmed'
        ]);
        // //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        Alert::success('Sukses','Password berhasil diubah!');
        return redirect()->route('viewProfile');
    }

    //Show form edit user pass admin
    public function formPass($id){
        $level = Auth::user()->level_id;
        $users = $this->apiHeaderNav();
        $usr = User::findOrFail($id);
        $lvl = Level::where('id_level', $usr->level_id)->pluck('name_level', 'id_level');
        return view('user/userEditPassAdmin',['data'=>$users,'user'=>$usr,'level'=>$lvl]);
    }

    //Update pass user admin
    public function updatePass(Request $request){
        // //Current password and new password are same
        if(strcmp($request->get('new_password'), $request->get('new_password_confirmation')) != 0){
            Alert::error('Periksa kembali password baru yang anda masukkan');
            return redirect()->back();
        }
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required|string|max:255',
            'nip' => 'required',
            'level_id' => 'required',
            'new_password' => 'required|string|min:6|confirmed'
        ]);
        if($request->level_id == 2){
            $user = User::findOrFail($request->id);
            $user->password = bcrypt($request->get('new_password'));
            $user->save();
            Alert::success('Sukses','Password berhasil diubah!');
            return redirect()->route('adminProvList');
        }elseif($request->level_id == 3){
            $user = User::findOrFail($request->id);
            $user->password = bcrypt($request->get('new_password'));
            $user->save();
            Alert::success('Sukses','Password berhasil diubah!');
            return redirect()->route('adminKabList');
        }elseif($request->level_id == 4){
            $user = User::findOrFail($request->id);
            $user->password = bcrypt($request->get('new_password'));
            $user->save();
            Alert::success('Sukses','Password berhasil diubah!');
            return redirect()->route('userProvList');
        }elseif($request->level_id == 5){
            $user = User::findOrFail($request->id);
            $user->password = bcrypt($request->get('new_password'));
            $user->save();
            Alert::success('Sukses','Password berhasil diubah!');
            return redirect()->route('userKabList');
        }else{
            Alert::error('Eror','Gagal merubah password');
            return redirect()->back();
        }
    }

    //select kab based on provinsi
    public function selectKab(Request $request)
    {
        if($request->ajax()){
            $kabupaten = DB::table('kabupaten')
                        ->where('provinsi_id',$request->id_provinsi)
                        ->pluck("nama_kabupaten","id_kabupaten")
                        ->all();
            $data = view('ajax-select',compact('kabupaten'))->render();
            return response()->json(['options'=>$data]);
        }
    }
    //select satda based on kategori_satda
    public function selectSatda(Request $request)
    {
        if($request->kategori_satda_id==1){
            if($request->ajax()){
                $satda = DB::table('satda')
                            ->where('provinsi_id',$request->provinsi_id)
                            ->pluck("name_satda","id_satda")
                            ->all();
                $data = view('ajax-select',compact('satda'))->render();
                return response()->json(['options'=>$data]);
            }
        }elseif($request->kategori_satda_id==2){
            if($request->ajax()){
                $satda = DB::table('satda')
                            ->where('kabupaten_id',$request->kabupaten_id)
                            ->pluck("name_satda","id_satda")
                            ->all();
                $data = view('ajax-select',compact('satda'))->render();
                return response()->json(['options'=>$data]);
            }
        }
    }
    //select skpd based on satda
    public function selectSkpd(Request $request)
    {
        if($request->ajax()){
            $skpd = DB::table('skpd')
                    ->where('satda_id',$request->id_satda)
                    ->pluck("name_skpd","id_skpd")
                    ->all();
            $data = view('ajax-select',compact('skpd'))->render();
            return response()->json(['options'=>$data]);
        }
    }
}