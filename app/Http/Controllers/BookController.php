<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{


    public function authors()
    {
        return view('registerauthors');
    }

    public function registerauthors()
    {

    }

    public function categorys()
    {
        return view('registercategorys');
    }

    public function registercategorys()
    {

    }

    public function catalogbooks()
    {
        return view('catalogbooks');
    }

    public function storecatalogbooks()
    {
        return view('catalogbooks');
    }
}
