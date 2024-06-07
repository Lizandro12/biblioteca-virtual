<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class StartController extends Controller
{
    public function start() {

        $news = Book::where('news', 1)->get();
        $mostreadeds = Book::where('mostreaded', 1)->get();
        $romances = Book::where('category_name', 'Romance')->get();

        return view('home.home', compact('news', 'mostreadeds', 'romances'));
    }

}

