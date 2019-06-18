<?php

namespace App\Http\Controllers\Kabupaten;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = $this->apiHeaderNav();
        return view('kabupaten/kabReferenceData',['data'=>$users]);
    }
}