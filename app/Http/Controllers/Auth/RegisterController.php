<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use App\Models\utilisateurs;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::home;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'Nom' => ['required', 'string', 'max:255'],
            'Prenom' => ['required', 'string', 'max:255'],
            'Telephone' => ['required', 'string', 'min:9', 'max:20'],
            'Ville' => ['required', 'string', 'max:255'],
            'Adresse' => ['required', 'string', 'max:255'],
            'Sexe' => ['required', 'string', 'max:255'],
            'DateNaiss' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'Role' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return user::create([
            'Nom' => $data['Nom'],
            'Prenom' => $data['Prenom'],
            'Telephone' => $data['Telephone'],
            'Ville' => $data['Ville'],
            'Adresse' => $data['Adresse'],
            'Sexe' => $data['Sexe'],
            'DateNaiss' => $data['DateNaiss'],
            'email' => $data['email'],
            'Role' => $data['Role'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
