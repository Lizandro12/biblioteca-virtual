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
    public function login(){
        return view('auth.login');
    }

    public function cadastrar(){
        return view('auth.register');
    }

    public function auth( Request $request){

        $credencial = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credencial)){
            $request->session()->regenerate();


            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'As credenciais sao invalidas.',
        ])->onlyInput('email');

    }

    public function store(Request $request){

        $request->validate( [
            'name' =>['required', 'string' , 'regex:/^[a-zA-Z\s]+$/', 'min:5','max:255'],
            'email' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
            'password' => ['required', 'string', 'min:8'],
        ]);

            $user = new User;

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);

            $user->save();
            Auth::login($user);
            return redirect('/');


    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function forgotpassword(){
        return view('auth.recoverpassword');
    }

    public function resetemail(Request $request){

        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }

    public function newpassword( string $token){

        return view('auth.newpassword', ['token' => $token]);
    }

    public function updatepassword( Request $request){

        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8, confirmed'],
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->password = bcrypt($password);
                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

}



