<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\reservations;

class ReservationControlleur extends Controller
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

            $reservations = reservations::where('DateReservation','LIKE','%' .$search. '%')
            ->orWhere('Immatriculation', 'LIKE', '%'.$search.'%')
            ->orWhere('Email', 'LIKE', '%'.$search.'%')->get();

          } else{
            $reservations = reservations::all();
          }

          $auth_role = auth()->user()->Role;
         
          $reservations = reservations::orderBy('idReserv','asc')->get();
          $nbr_reservations = sizeof($reservations);

          return view('Reservation.index', compact('auth_role','reservations','nbr_reservations','search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Reservation.create');
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
            'DateReservation' => 'required',
            'TypeVehicule' => 'required',
            'TypeLavage' => 'required',
            'MarqueVehicule' => 'required',
            'Immatriculation' => 'required',
            'Email' => 'required',
            
        ]);
         
        $reservations = new reservations;
        $reservations->DateReservation = $request->DateReservation;
        $reservations->TypeVehicule = $request->TypeVehicule;
        $reservations->TypeLavage = $request->TypeLavage;
        $reservations->MarqueVehicule = $request->MarqueVehicule;
        $reservations->Immatriculation = $request->Immatriculation;
        $reservations->Email = $request->Email;
        $reservations->timestamps = $request->timestamps;

        $reservations->save();

        return redirect('clientsHome')->with('status','Data send successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idReserv)
    {
        return view('Reservation.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idReserv)
    {
        $reservations = reservations::all($idReserv);
        return view('Reservation.index', compact('reservations'));
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
            'DateReservation' => 'required',
            'TypeVehicule' => 'required',
            'TypeLavage' => 'required',
            'MarqueVehicule' => 'required',
            'Immatriculation' => 'required',
            'Email' => 'required',       
        ]);
         
        $Reserv_id = $request->Reserv_id;
        $reservations = reservations::find($Reserv_id);
        $reservations->DateReservation = $request->DateReservation;
        $reservations->TypeVehicule = $request->TypeVehicule;
        $reservations->TypeLavage = $request->TypeLavage;
        $reservations->MarqueVehicule = $request->MarqueVehicule;
        $reservations->Immatriculation = $request->Immatriculation;
        $reservations->Email = $request->Email;
        $reservations->timestamps = $request->timestamps;

        $reservations->update();

        return redirect()->route('Reservation.index')->with('status','Data update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idReserv)
    {
        
        $reservations = reservations::findOrFail($idReserv);
        $reservations -> delete();
        return redirect()->route('Reservation.index')->with('status','Data delete successfully');
    }
}
