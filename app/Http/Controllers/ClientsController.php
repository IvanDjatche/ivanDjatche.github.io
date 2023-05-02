<?php

namespace App\Http\Controllers;
use App\Models\clients;
use Illuminate\Http\Request;

class AccueilControlleur extends Controller
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
        return view('clientsHome',compact(['auth_role']));

      
    }



}


