<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Session;
use App\Models\User;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');    
    }

    public function index()
    {
        return view('blog.halamanutama');    
    }

    public function login()
    {
        return view('blog.login');    
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
            info('User logged in successfully:', ['email' => $request->email]);
            return redirect()->intended('/')->withSuccess('Signed in');
        }
    
        info('Login failed for user:', ['email' => $request->email]);
        return redirect()->to('/login')->withErrors(['error' => 'These credentials do not match our records.']);
    }

    public function registrasi()
    {
        return view('blog.registrasi');    
    }

    public function postRegistrasi(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8' 
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect('/')->withSuccess('Registrasi berhasil');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }

    public function getAllUsers()
    {
        $users = (new User())->all();
        return response()->json($users, 200);    
    }

    public function adminpanel()
    {
        return view('blog.adminpanel');        
    }
}
