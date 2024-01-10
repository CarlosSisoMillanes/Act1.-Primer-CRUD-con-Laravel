<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonsController;
use App\Http\Controllers\UsuariosController;
use App\Http\Middleware\CheckRole;

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

Route::get(   '/', 

function () {return view('pokemons.login');}

    )->name('inicio_sesion'); //->middleware('checkRole');

/*
Route::view('/test','pokemons.index')->name('modo');
Route::view('/test','pokemons.index')->name('modo');*/

    

//Route::post('/login', 'LoginController@login')->name('login');
Route:: resource('pokemons',PokemonsController::class );
//Route:: resource('pokemons',UsuariosController::class); //->middleware(['auth', 'checkRole:admin']);
