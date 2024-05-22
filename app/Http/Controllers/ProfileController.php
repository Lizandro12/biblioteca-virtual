<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        $contact = $user->contact;

        if(!$contact) {
            $contact = new \App\Models\Contact();
        }

        return view('userprofile', compact('user', 'contact'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>['required', 'string' , 'regex:/^[a-zA-Z\s]+$/', 'min:5','max:255'],
            'email' => ['required', 'string','email'],
            'phone' => ['string', 'regex:/^\d+$/', 'max:9'],
            'address' => ['string', 'max:255'],
        ], [
            'name.required' => 'O campo nome é obrigatório',
            'name.string' => 'O formato é invalido',
            'name.regex' => 'O nome não deve ter números',
            'name.min' => 'O nome deve ter pelo menos 5 caracteres',
            'phone.string' => 'Formato de telefone invalido',
            'phone.regex' => 'O telefone deve ter apenas números',
            'phone.max' => 'O telefone deve ter apenas 9 digitos',
        ]);

/*         $user = auth()->user();
        $user->User::updateOrCreate([
            'name' => $request->name,
            'email' => $request->email,
        ]); */
    }

}
