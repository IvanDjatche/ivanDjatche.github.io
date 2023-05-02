<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lavages;

class LavageControlleur extends Controller
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

            $lavages = lavages::where('DateLavage','LIKE','%' .$search. '%')
            ->orWhere('NomLaveur', 'LIKE', '%'.$search.'%')->get();

          } else{
            $lavages = lavages::all();
          }

          $auth_role = auth()->user()->Role;
         
          $lavages = lavages::orderBy('idLavage','asc')->get();
          $nbr_lavage = sizeof($lavages);
          return view('Lavage.index', compact('auth_role','lavages','nbr_lavage','search'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Lavage.create');
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
            'DateLavage' => 'required',
            'Type' => 'required',
            'Montant' => 'required',
            'Duree' => 'required',
            'NomLaveur' => 'required',
           
        ]);
        $lavages = new lavages;
        $lavages->DateLavage = $request->DateLavage;
        $lavages->Type = $request->Type;
        $lavages->Montant = $request->Montant;
        $lavages->Duree = $request->Duree;
        $lavages->NomLaveur = $request->NomLaveur;
        $lavages->timestamps = $request->timestamps;
     

        $lavages->save();

        return redirect()->route('Lavage.index')->with('status','Data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idLavage)
    {
        $lavages = lavages ::findOrFail($idLavage);
        return view('Lavage.show',compact('lavages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idLavage)
    {
        
        $lavages = lavages ::findOrFail($idLavage);
        return view('Lavage.index',compact('lavages'));
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
            'DateLavage' => 'required',
            'Type' => 'required',
            'Montant' => 'required',
            'Duree' => 'required',
            'NomLaveur' => 'required',
           
        ]);

        $Lavage_id = $request->Lavage_id;
        $lavages = lavages::findOrFail($Lavage_id);
        $lavages->DateLavage = $request->DateLavage;
        $lavages->Type = $request->Type;
        $lavages->Montant = $request->Montant;
        $lavages->Duree = $request->Duree;
        $lavages->NomLaveur = $request->NomLaveur;
        $lavages->timestamps = $request->timestamps;

        $lavages->update();

        return redirect()->route('Lavage.index')->with('status','Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idLavage)
    {
        
        $lavages = lavages::findOrFail($idLavage);
        $lavages->delete();
        return redirect()->route('Lavage.index')->with('status','Data delete successfully');
    }
}
