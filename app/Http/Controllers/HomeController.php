<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function client()
    {
        return view('client');
    }

    public function provider()
    {
        return view('provider');
    }
    public function myservice()
    {
        return view('provider.myservice');
    }
    public function myperfil()
    {
        return view('provider.myperfil');
    }

}
