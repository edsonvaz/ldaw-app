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

Route::view('/team','team.index',['name' => 'EQUIPO 4']);
Route::view('/dashboard','dashboard.index',['name' => 'EQUIPO 4']);

Route::get('/login', function(){
    return view('login');
});

Route::get('/registrarse', function(){
    return view('registro_usuario');
});

Route::get('/home', function(){
    return view('home');
});