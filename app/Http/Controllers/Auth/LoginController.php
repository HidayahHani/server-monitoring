<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    //
    // use AuthenticatesUsers;

    protected $redirectTo = '/';

    // public function credentials(Request $request)
    // {
    //     return ['username' => $request->username, 'password' => $request->password];
    // }

    public function index(){
        return view('auth.login');
    }

    public function customLogin(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            # code...
            return redirect('dashboard');
        }
        return redirect('/')->with('success', 'Login details are not valid');
    }

    public function dashboard(){
        if (Auth::check()) {
             # code...
            return view('home');
        }
        return redirect('/')->with('success', 'You are not allowed to access.');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/');
    }
}
