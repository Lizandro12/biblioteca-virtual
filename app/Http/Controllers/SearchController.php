<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

use function Laravel\Prompts\search;

class SearchController extends Controller
{
    public function search(Request $request){

        $searchTerm = $request->input('search');
        $authorsIds = $request->input('authors', []);
        $categoriesIds = $request->input('category', []);
        $bookId = $request->input('id');
        $authorId = $request->input('author_id');
        $categoryId = $request->input('category_id');

        if($bookId){
            $books = Book::where('id', $bookId)->paginate(6);
        }elseif($authorId){
            $books = Book::where('author_id', $authorId)->paginate(6);
        }elseif($categoryId){
            $books = Book::where('category_id', $categoryId)->paginate(6);
        }elseif($searchTerm) {
            $books = Book::where('title', 'like', '%'.$searchTerm.'%')->paginate(6);
        }elseif(!empty($authorsIds)){
            $books = Book::whereIn('author_id', $authorsIds)->paginate(6);
        }elseif(!empty($categoriesIds)){
            $books = Book::whereIn('category_id', $categoriesIds)->paginate(6);
        }else{
            $books = Book::paginate(6);
        }

        $authors = Author::all();
        $categories = Category::all();
        return view('search', compact('books', 'authors', 'categories'), ['search'=> $searchTerm], ['filter'=> $authorsIds]);
    }
    public function authorpage(){

        $authors = Author::all();
        return view('authorpage', compact('authors'));
    }
    public function categorypage(){

        $categories = Category::all();
        return view('categorypage', compact('categories'));
    }
}

