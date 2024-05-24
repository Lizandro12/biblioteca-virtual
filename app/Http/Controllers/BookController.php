<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BookController extends Controller
{

    public function index()
    {
        /*return view('bookstore');*/
    }

    public function create() 
    {
        return view('create-book');

    }
    public function store(Request $request)
    {
        dd($request->title);        
    }
}
