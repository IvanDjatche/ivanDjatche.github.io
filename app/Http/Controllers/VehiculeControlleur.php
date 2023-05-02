<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vehicules;

class VehiculeControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $search = $request ['search'] ?? "";
          
          if($search != ""){

            $vehicules = vehicules::where('Immatriculation','LIKE','%'.$search.'%')
            ->orWhere('Marque', 'LIKE', '%'.$search.'%')
            ->orWhere('Couleur', 'LIKE', '%'.$search.'%')->get();

          } else{
            $vehicules = vehicules::all();
          }

          $auth_role = auth()->user()->Role;
         
          $vehicules = vehicules::orderBy('idVehi','asc')->get();
          $nbr_vehicule = sizeof($vehicules);

          return view('Vehicule.index', compact('auth_role','vehicules','nbr_vehicule','search'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Vehicule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Immatriculation' => 'required',
            'Marque' => 'required',
            'Model' => 'required',
            'Couleur' => 'required',
            'NombreRoue' => 'required',
            'NombrePortiere' => 'required',  
        ]);

        $vehicules = new vehicules;
        $vehicules->Immatriculation = $request->Immatriculation;
        $vehicules->Marque = $request->Marque;
        $vehicules->Model = $request->Model;
        $vehicules->Couleur = $request->Couleur;
        $vehicules->NombreRoue = $request->NombreRoue;
        $vehicules->NombrePortiere = $request->NombrePortiere;
        $vehicules->timestamps = $request->timestamps;
      

        $vehicules->save();

        return redirect()->route('Vehicule.index')->with('status','Data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view('Vehicule.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idVehi)
    {
        $utilisateurs = utilisateurs ::findOrFail($idVehi);
        return view('Vehicule.index',compact('vehicules'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'Immatriculation' => 'required',
            'Marque' => 'required',
            'Model' => 'required',
            'Couleur' => 'required',
            'NombreRoue' => 'required',
            'NombrePortiere' => 'required',  
        ]);

        $Vehi_id = $request->Vehi_id;
        $vehicules = vehicules::find($Vehi_id);
        $vehicules->Immatriculation = $request->Immatriculation;
        $vehicules->Marque = $request->Marque;
        $vehicules->Model = $request->Model;
        $vehicules->Couleur = $request->Couleur;
        $vehicules->NombreRoue = $request->NombreRoue;
        $vehicules->NombrePortiere = $request->NombrePortiere;
        $vehicules->timestamps = $request->timestamps;

        $vehicules->save();

        return redirect()->route('Vehicule.index')->with('status','Data update successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idVehi)
    {
        $vehicules = vehicules::findOrFail($idVehi);
        $vehicules->delete();
        return redirect()->route('Vehicule.index')->with('status','Data delete successfully');
    }
}
