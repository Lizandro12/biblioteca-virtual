<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Category;

class BookController extends Controller
{


    public function authors()
    {
        return view('registerauthors');
    }

    public function registerauthors(Request $request)
    {

        $request->validate([
            'name' =>['required','string' , 'regex:/^[a-zA-Z\s]+$/','max:255'],
            'birthday' => ['date'],
            'nationality' => ['string', 'max:255'],
            'biography' => ['string', 'max:1000'],
        ] , [
            'name.required' => 'O campo nome é obrigatório',
            'name.string' => 'O formato é inválido',
            'name.regex' => 'O nome não deve conter números',
            'name.max' => 'O nome deve ter no máximo 255 caracteres',
            'birthday.date' => 'A data de aniversário deve estar no formato DD-MM-YYYY',
            'nationality.string' => 'O formato de nacionalidade é inválido',
            'nationality.max' => 'A nacionalidade deve ter no máximo 255 caracteres',
            'biography.string' => 'O formato da biografia é inválido',
            'biography.max' => 'A biografia deve ter no máximo 1000 caracteres',
        ]);

        $author = new Author();

        $author->name = $request->name;
        $author->birth_date = $request->birthday;
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
        return view('catalogbooks');
    }

    public function storecatalogbooks()
    {
        return view('catalogbooks');
    }
}
