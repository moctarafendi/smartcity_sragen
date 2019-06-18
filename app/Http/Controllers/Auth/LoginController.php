<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\HistoryLogin;
use App\User;
use Alert;
use Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    protected function authenticated(Request $request, User $user){
        $iduser = Auth::user()->id;
        $date = $this->getDate();
        $sessionId = session()->getId();
        DB::table('history_login')
            ->insert([
                'user_id' => $iduser, 
                'date_login' => $date,
                'id_session' => $sessionId
        ]);
        Alert::success('Selamat Datang ','Login Sukses!');
        return redirect()->intended($this->redirectPath());
    }

    protected function logout(){
        $date = $this->getDate();
        $sessionId = session()->getId();
        $loggedout = HistoryLogin::where('id_session', $sessionId)->firstOrFail();
        $loggedout->date_logout = $date;
        $loggedout->save();
        Auth::logout();

        return redirect('/');
    }

    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function nip(){
        return 'email';
    }

    protected function credentials(Request $request){
        $field = filter_var($request->get($this->nip()), FILTER_VALIDATE_EMAIL)
            ? $this->nip()
            : 'nip';
        return [
            $field => $request->get($this->nip()),
            'password' => $request->password,
        ];
    }
}