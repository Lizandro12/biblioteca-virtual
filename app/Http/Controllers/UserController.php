<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('forms.login');
    }

    public function cadastrar(){
        return view('forms.register');
    }

    public function recoverpassword(){
        return view('forms.recoverpassword');
    }

    public function newpassword(){
        return view('forms.newpassword');
    }

}



