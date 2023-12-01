<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
        return redirect()->intended('/admin/home');    
    }

    public function index()
    {
        return view('blog.adminpanel');    
    }
}
