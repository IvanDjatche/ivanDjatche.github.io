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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
         $auth_role = auth()->user()->Role;
        return view('home',compact(['auth_role']));
    }

    public function adminHome()
    {
        $auth_role = auth()->user()->Role;
        return view('adminHome',compact(['auth_role']));
    }
  

    public function clientsHome()
    {
        $auth_role = auth()->user()->Role;
        return view('clientsHome',compact(['auth_role']));
    }

}