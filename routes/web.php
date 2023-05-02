<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurControlleur;
use App\Http\Controllers\ReservationControlleur;
use App\Http\Controllers\LavageControlleur;
use App\Http\Controllers\LaveurControlleur;
use App\Http\Controllers\VehiculeControlleur;
use App\Http\Controllers\AdminControlleur;
use App\Http\Controllers\PlanningControlleur;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::resource('/admin', AdminControlleur :: class );
Route::resource('/Client', ClientControlleur :: class );
Route::resource('/Utilisateur', UtilisateurControlleur :: class );
Route::resource('/Reservation', ReservationControlleur :: class );
Route::resource('/Lavage', LavageControlleur :: class );
Route::resource('/Laveur', LaveurControlleur :: class );
Route::resource('/Vehicule', VehiculeControlleur :: class );
Route::resource('/Planning', PlanningControlleur :: class );


// Route::get('/Reservation',[ReservationControlleur::class,  'search']);
// Route::get('/Reservation',[ReservationControlleur::class,  'index']);
// Route::get('edit/{id}',[UtilisateurControlleur::class,'edit']);
// Route::get('upate/{id}',[UtilisateurControlleur::class,'update']);
// Route::get('delete/{id}',[UtilisateurControlleur::class,'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('index');




// Route::middleware(['auth', 'user-access:user'])->group(function () {
  
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
//   });
  
  Route::middleware(['auth', 'user-access:admin'])->group(function () {
    
      Route::get('/adminHome', [HomeController::class, 'adminHome'])->name('admin.home');
  });
   
  Route::middleware(['auth', 'user-access:clients'])->group(function () {
    
      Route::get('/clientsHome', [HomeController::class, 'clientsHome'])->name('clients.home');
  });
  
