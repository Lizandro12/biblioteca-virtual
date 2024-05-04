<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function cadastrar(){
        return view('auth.register');
    }

    public function recoverpassword(){
        return view('auth.recoverpassword');
    }

    public function newpassword(){
        return view('auth.newpassword');
    }

}



