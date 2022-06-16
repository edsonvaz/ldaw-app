<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventController;
use GuzzleHttp\Middleware;

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

Route::view('login', 'login')->name('login')->middleware('guest');

Route::post('/login',[LoginController::class, 'login']);
Route::post('/logout',[LoginController::class, 'logout']);
Route::post('/registrarse',[LoginController::class, 'registrarse']);
Route::post('/addevent',[EventController::class, 'addevent']);
Route::post('/evento/registra',[EventController::class, 'addattendee']);

Route::get('/evento/{id_evento}',[EventController::class, 'show'])->name('eventos.show');

Route::get('/addevent', function(){
    return view('addevent');
});

Route::get('/registrarse', function(){
    return view('registro_usuario');
});

Route::get('/home', function(){
    return view('home');
});
Route::view('/team','team.index',['name' => 'team']);
Route::view('/evento','evento.index',['name' => 'evento']);
Route::view('/evento/registra','registra.index',['name' => 'evento'])->middleware('auth');

Route::get('/dashboard',[EventController::class, 'index']);


