<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function cadastrar()
    {
        return view('auth.register');
    }

    public function auth( Request $request)
    {
        $credencial = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ], [
            'email.required' => 'O campo email é obrigatório',
            'password.required' => 'O campo senha é obrigatório'
        ]);

        if(Auth::attempt($credencial)){
            $request->session()->regenerate();

            return redirect()->intended('/profile');
        }

        return back()->withErrors([
            'email' => 'As credenciais sao invalidas.',
        ])->onlyInput('email');

    }

    public function store(Request $request)
    {

        $request->validate( [
            'name' =>['required', 'string' , 'regex:/^[a-zA-Z\s]+$/', 'min:5','max:255'],
            'email' => ['required', 'string','email'],
            'password' => ['required', 'string', 'min:8'],
        ], [
            'name.required' => 'O campo nome é obrigatório',
            'name.string' => 'O formato é invalido',
            'name.regex' => 'O nome não deve ter números',
            'name.min' => 'O nome deve ter pelo menos 5 caracteres',
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Formato de email invalido',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres',
        ]);

            $user = new User;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            //$user->is_admin = true;
            //$user->is_client = false;

            $user->save();
            Auth::login($user);
            return redirect('/profile');


    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function forgotpassword()
    {
        return view('auth.recoverpassword');
    }

    public function resetemail(Request $request){

        $request->validate([
            'email' => ['required', 'email'],
        ], [
            'email.required' => 'O campo email é obrigatório',
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    public function newpassword( string $token)
    {
        return view('auth.newpassword', ['token' => $token]);
    }

    public function updatepassword( Request $request)
    {

        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8, confirmed'],
        ], [
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Formato de email invalido',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres',
            'password.confirmed' => 'As senhas não são iguais',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->password = bcrypt($password);
                $user->save();

                /*event(new PasswordReset($user));*/
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

}



