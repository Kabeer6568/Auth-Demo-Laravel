<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function create(){
        return view('auth.index');
    }

    public function register(Request $request ){

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('auth.data')->with('sucess' , 'Registered');

    }

    public function showLoginForm(){
        return view('auth.login');
    }


    public function login(Request $request){

        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);

        $loginData = filter_var($request->login , FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $credencials = ([
            $loginData => $request->login,
            'password' => $request->password,
        ]);

        if (Auth::attempt($credencials)) {
            $request->session()->regenerate();

            return redirect()->route('auth.data')->with('sucess' , 'Logged IN');
        }

        return back()->withErrors([
            'login' => 'Invalid Email/Username Or Password',
        ])->onlyInput('login');

    }

    public function data(){
        
        $user = auth()->user();

        return view('auth.data' , compact('user'));

    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login')->with('sucess' , 'logged Out');

    }
}
