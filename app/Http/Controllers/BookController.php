<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Category;
use App\Models\Book;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{


    public function authors()
    {
        return view('registerauthors');
    }

    public function registerauthors(Request $request)
    {

        $request->validate([
            'name' =>['required','string','max:255'],
            'birthday' => ['date'],
/*             'nationality' => ['string', 'max:255'], */
            'biography' => ['string', 'max:1000'],
        ] , [
            'name.required' => 'O campo nome é obrigatório',
            'name.string' => 'O formato é inválido',
            'name.max' => 'O nome deve ter no máximo 255 caracteres',
/*             'birthday.date' => 'A data de aniversário deve estar no formato DD-MM-YYYY', */
            'nationality.string' => 'O formato de nacionalidade é inválido',
            'nationality.max' => 'A nacionalidade deve ter no máximo 255 caracteres',
            'biography.string' => 'O formato da biografia é inválido',
            'biography.max' => 'A biografia deve ter no máximo 1000 caracteres',
        ]);

        $author = new Author();

        $author->name = $request->name;
/*         $author->birth_date = $request->birthday; */
        $author->nationality = $request->nationality;
        $author->biography = $request->biography;
        $author->save();


        session()->flash('message','Autor cadastrado com sucesso');
        return redirect()->back();

    }

    public function categorys()
    {
        return view('registercategorys');
    }

    public function registercategorys(Request $request)
    {
        $request->validate([
            'name' =>['required','string','max:255'],
            'description' => ['string', 'max:1000'],
        ] , [
            'name.required' => 'O campo nome é obrigatório',
            'name.string' => 'O formato é inválido',
            'name.max' => 'O nome deve ter no máximo 255 caracteres',
            'description.string' => 'O formato da descrição é inválido',
            'description.max' => 'A biografia deve ter no máximo 1000 caracteres',
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->description = $request->description;
        $category->save();

        session()->flash('message','Categoria cadastrada com sucesso');
        return redirect()->back();

    }

    public function catalogbooks()
    {

        $categories = Category::all();
        $authors = Author::all();

        return view('catalogbooks', compact('categories', 'authors'));

    }

    public function storecatalogedbooks(Request $request)
    {
        $request->validate([
            'title' =>['required','string','max:255'],
            'publishingcompany' => ['required','string', 'max:255'],
            'publicationdate' => ['required','date'],
            'isbn' => ['required'],
/*             'photo' => ['string'], */
            'synopsis' => ['max:1000'],
        ] , [
            'title.required' => 'O campo título é obrigatório',
            'title.string' => 'O formato é inválido',
            'publishingcompany.required' => 'O campo editora é obrigatório',
            'title.max' => 'O título deve ter no máximo 255 caracteres',
            'publishingcompany.string' => 'O formato é inválido',
            'publishingcompany.max' => 'O campo editora deve ter no máximo 255 caracteres',
            'publicationdate.required' => 'A data de publicação é obrigatória',
            'publicationdate.date' => 'A data de publicação deve estar no formato DD-MM-YYYY',
            'isbn.required' => 'O ISBN é obrigatório',
            'synopsis.max' => 'A sinopse deve ter no máximo 1000 caracteres',
        ]);

        $book = new Book();

        $book->author_id = $request->author;
        $book->author_name = Author::find($book->author_id)->name;
        $book->category_id = $request->category;
        $book->category_name = Category::find($book->category_id)->name;
        $book->title = $request->title;
        $book->publishing_company = $request->publishingcompany;
        $book->publication_date = $request->publicationdate;
        $book->isbn = $request->isbn;
        $book->synopsis = $request->synopsis;

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('img/bookscovers'), $imageName);
            $book->image = $imageName;
        }

        if($request->hasFile('filebook') && $request->file('filebook')->isValid()) {

            $bookName = 'univ_lit_'.time().'.'.$request->filebook->extension();
            $request->filebook->move(public_path('books'), $bookName);
            $book->book_url = $bookName;
        }

        $book->save();


        session()->flash('message','Livro cadastrado com sucesso');
        return redirect()->back();
    }

    public function downloadbook($id)
    {
        $book = Book::find($id);
        $path = public_path("books/$book->book_url");
        return response()->download($path);

    }
}
