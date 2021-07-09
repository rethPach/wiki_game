<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personajes', function() {
  $personajesDeCallOfDuty = [
    ['name'=>'Elias', 'nick'=> 'Gosth'],
    ['name'=>'Eddie price', 'nick'=> 'Sgt Eddie'],
    []
  ];

  $algunCambio = "hola mundo";

  dd($personajesDeCallOfDuty[2]);
});


Route::get('/personajes-db', function() {

  $cadenasDeTexto = "cualquier vaina";
  $numerosEnteros = 12;
  $numerosFlotantes = 1.2;
  //0
  $frutas = ['pera', 'manzana', 'durazno', 'kiwi'];

  /*$personajesDeCallOfDuty = DB::select('select * from personajes');
  dd($personajesDeCallOfDuty);*/

  dd($frutas);

});