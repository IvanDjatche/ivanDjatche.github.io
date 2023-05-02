<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plannings;

class PlanningControlleur extends Controller
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

            $plannings = plannings::where('DateDebut','LIKE','%' .$search. '%')
            ->orWhere('DateFin','LIKE','%' .$search. '%')->get();

          } else{
            $plannings = plannings::all();
          }

          $auth_role = auth()->user()->Role;
         
          $plannings = plannings::orderBy('idPlanning','asc')->get();
          $nbr_plannification = sizeof($plannings);

          return view('Planning.index', compact('auth_role','plannings','nbr_plannification','search'));
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Planning.create');
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
            'DateDebut' => 'required',
            'DateFin' => 'required',
            
        ]);
         
        $plannings = new plannings;
        $plannings->DateDebut = $request->DateDebut;
        $plannings->DateFin = $request->DateFin;
        $plannings->timestamps = $request->timestamps;
        $plannings->save();

        return redirect()->route('Planning.index')->with('status','Data saved successfully');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idPlanning)
    {
        return view('Planning.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idPlanning)
    {
        $plannings = plannings ::findOrFail($idPlanning);
        return view('Planning.index',compact('plannings'));
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
            'DateDebut' => 'required',
            'DateFin' => 'required',
            
        ]);

        $planning_id = $request->planning_id;
        $plannings = plannings::find($planning_id);
        $plannings->DateDebut = $request->DateDebut;
        $plannings->DateFin = $request->DateFin;
        $plannings->timestamps = $request->timestamps;
       
        $plannings->update();

       return redirect()->route('Planning.index')->with('status','Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPlanning)
    {
        
        $plannings = plannings::find($idPlanning);
        $plannings -> delete();
        return redirect()->route('Planning.index')->with('status','Data delete successfully');
       
    }
}
