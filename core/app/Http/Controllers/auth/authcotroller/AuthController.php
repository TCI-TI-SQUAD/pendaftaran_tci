<?php

namespace App\Http\Controllers\auth\authcotroller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('user-auth.user-login');
    }

    public function register(){
        return view('user-auth.user-register');
    }
}
