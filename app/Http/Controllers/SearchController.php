<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\search;

class SearchController extends Controller
{
    // public function index(Request $request)
    // {
    //     $search = $request ['search'] ?? "";
          
    //       if($search != ""){

    //         $reservations = reservations::where('DateReservation','Email','Immatriculation','LIKE',"%$search%")->get();

    //       } else{
    //         $reservations = reservations::all();
    //       }

    //       $auth_role = auth()->user()->Role;
         
    //       $reservations = reservations::orderBy('idReserv','asc')->get();
    //       $nbr_reservations = sizeof($reservations);

    //       return view('search.index', compact('auth_role','reservations','nbr_reservations','search'));
    // }

}
