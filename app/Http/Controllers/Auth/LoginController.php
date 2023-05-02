<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\LoginsUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }


            public function login(Request $request)
            {   
                    $auth_role = auth();
                    $input = $request->all();

                            $this->validate($request, [
                            'email' => 'required|email',
                            'password' => 'required',
                            ]);

                                    if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
                                    {
                                            if (auth()->user()->Role == 'admin') {
                                            return redirect()->route('admin.home');

                                                    }else if (auth()->user()->Role == 'clients') {
                                                    return redirect()->route('clients.home');

                                                    }else{
                                                    return redirect()->route('home');
                                                    }
                                            }else{

                                    return redirect()->route('index',compact(['auth_role']))
                                           ->with('error','email-Address And Password Are Wrong.');
                                    }


            }

      

}