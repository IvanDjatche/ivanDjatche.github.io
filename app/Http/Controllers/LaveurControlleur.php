<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laveurs;

class LaveurControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = $request ['search'] ?? "";
        $auth_role = auth()->user()->Role;
        $laveurs = laveurs::all();
        $laveurs = laveurs::orderBy('idLav','asc')->get();
        return view('Laveur.index', compact('auth_roole','laveurs','search'));
    }

    public function search(Request $request)
    {
        $search = $request ['search'] ?? "";
          
          if($search != ""){

            $laveurs = laveurs::where('Nom','eMail','LIKE',"%$search%")->get();

          } else{
            $laveurs = laveurs::all();
          }

          $auth_role = auth()->user()->Role;
         
          $laveurs = laveurs::orderBy('idLav','asc')->get();
       

          return view('Laveur.index', compact('auth_roole','laveurs','search'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Laveur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $laveurs = new laveurs;
        $laveurs->Nom = $request->Nom;
        $laveurs->Prenom = $request->Prenom;
        $laveurs->Telephone = $request->Telephone;
        $laveurs->Sexe = $request->Sexe;
        $laveurs->DateNaiss = $request->DateNaiss;
        $laveurs->eMail = $request->eMail;
        $laveurs->passe = $request->passe;

        $laveurs->save();

        return redirect()->route('Laveur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Laveur.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Laveur.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
