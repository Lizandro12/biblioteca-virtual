<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        return view('search');
    }
    public function authorpage(){
        return view('authorpage');
    }
    public function categorypage(){
        return view('categorypage');
    }
}

