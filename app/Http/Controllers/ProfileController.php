<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('userprofile');
    }

    public function accountdetails()
    {
        $user = auth()->user();
        $contact = $user->contact;

        if(!$contact) {
            $contact = new Contact();
        }

        return view('accountdetails', compact('user', 'contact'));
    }

    public function updateaccountdetails(Request $request)
    {
        $request->validate([
            'name' =>['string' , 'regex:/^[a-zA-Z\s]+$/', 'min:5','max:255'],
            'email' => ['string','email'],
            'phone' => ['string', 'digits:9'],
            'address' => ['string', 'max:255'],
        ], [
            'name.string' => 'O formato é invalido',
            'name.regex' => 'O nome não deve ter números',
            'name.min' => 'O nome deve ter pelo menos 5 caracteres',
            'email.string' => 'O formato de email é invalido',
            'email.email' => 'O formato de email é invalido',
            'phone.string' => 'Formato de telefone invalido',
            'phone.regex' => 'O telefone deve ter apenas números',
            'phone.digits' => 'O telefone deve ter apenas 9 digitos',
        ]);

        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;

        $contact = $user->contact;

        if(!$contact) {
            $contact = new Contact();
        }

        $contact->user_id = $user->id;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $user->save();
        $contact->save();


        session()->flash('message','Perfil actualizado com sucesso' );
        return redirect()->back();

    }
}
