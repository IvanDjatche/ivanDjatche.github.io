<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;


class AdminControlleur extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $auth_role = auth()->user()->Role;
        return view('adminHome',compact(['auth_role']));
    }
}
