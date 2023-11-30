<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct() 
    {
            
    }


    public function index(){
        $layout = [
            'title' => 'Halaman Login'
        ];

        return view('login',$layout);
    }

    public function loginpost(Request $request)
    {
        // $data = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password')
        // ];

        // if (Auth::attempt($data)) {
        //     return redirect('dashboard');
        // } else {
        //     Session::flash('error', 'Email atau Password Salah');
        //     return redirect('login');
        // }

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::check()) {
                return redirect()->intended('dashboard');
            }
        }

        return back()->with('LoginError','Gagal Login');

    }

    public function dashboard()
    {
        return view('dashboard');    
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        
        return redirect('login');
    }
}
