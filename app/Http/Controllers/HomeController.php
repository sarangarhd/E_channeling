<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   

    public function index()
    {
        $role=Auth::user()->role;
        if($role=='1'){
            return view('admin')->with('messege','You logged as a Admin');
        }if($role=='0'){
            return view('home')->with('messege','You logged as a User');
        }
    }

    
}
