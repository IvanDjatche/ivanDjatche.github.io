<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\utilisateurs;

class UtilisateurControlleur extends Controller
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

            $utilisateurs = utilisateurs::where('Nom','LIKE','%'.$search.'%')
            ->orWhere('Prenom', 'LIKE', '%'.$search.'%')
            ->orWhere('Ville', 'LIKE', '%'.$search.'%')
            ->orWhere('email', 'LIKE', '%'.$search.'%')
            ->orWhere('Role', 'LIKE', '%'.$search.'%')->get();

          } else{
            $utilisateurs = utilisateurs::all();
          }

          $auth_role = auth()->user()->Role;
         
          $utilisateurs = utilisateurs::orderBy('id','asc')->get();
          $nbr_user = sizeof($utilisateurs);

          return view('Utilisateur.index', compact('auth_role','utilisateurs','nbr_user','search'));
     }


    public function UpDateUserById($idUser)

    {
        $utilisateurs = utilisateurs::find($idUser);
        return view('Utilisateur.index', compact('utilisateurs'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Utilisateur.create');
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
            'Nom' => 'required',
            'Prenom' => 'required',
            'Telephone' => 'required',
            'Ville' => 'required',
            'Adresse' => 'required',
            'Sexe' => 'required',
            'DateNaiss' => 'required',
            'email' => 'required',
            'Role' => 'required',
            'password' => 'required',
            
        ]);
        
        $utilisateurs = new utilisateurs;
        $utilisateurs->Nom = $request->Nom;
        $utilisateurs->Prenom = $request->Prenom;
        $utilisateurs->Telephone = $request->Telephone;
        $utilisateurs->Ville = $request->Ville;
        $utilisateurs->Adresse = $request->Adresse;
        $utilisateurs->Sexe = $request->Sexe;
        $utilisateurs->DateNaiss = $request->DateNaiss;
        $utilisateurs->email = $request->email;
        $utilisateurs->Role = $request->Role;
        $utilisateurs->password = $request->password;
        $utilisateurs->timestamps = $request->timestamps;

        $utilisateurs->save();

        return redirect()->route('Utilisateur.index')->with('status','Data saved successfully');
       
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utilisateurs = utilisateurs ::findOrFail($id);
        return view('Utilisateur.show',compact('utilisateurs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $utilisateurs = utilisateurs::findOrFail($id);
        return view('Utilisateur.index',compact('utilisateurs'));

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
            'Nom' => 'required',
            'Prenom' => 'required',
            'Telephone' => 'required',
            'Ville' => 'required',
            'Adresse' => 'required',
            'Sexe' => 'required',
            'DateNaiss' => 'required',
            'email' => 'required',
            'Role' => 'required',
            'password' => 'required',
            
        ]);
       

        $idUser = $request->idUser;
        $utilisateurs = utilisateurs::find($idUser);
        $utilisateurs->Nom = $request->Nom;
        $utilisateurs->Prenom = $request->Prenom;
        $utilisateurs->Telephone = $request->Telephone;
        $utilisateurs->Ville = $request->Ville;
        $utilisateurs->Adresse = $request->Adresse;
        $utilisateurs->Sexe = $request->Sexe;
        $utilisateurs->DateNaiss = $request->DateNaiss;
        $utilisateurs->email = $request->email;
        $utilisateurs->Role = $request->Role;
        $utilisateurs->password = $request->password;
        $utilisateurs->timestamps = $request->timestamps;

        $utilisateurs->update();

        return redirect()->route('Utilisateur.index')->with('status','Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $utilisateurs = utilisateurs::findOrFail($id);
        $utilisateurs->delete();
        return redirect()->route('Utilisateur.index')->with('status','Data Delete successfully');
       
    }
}
