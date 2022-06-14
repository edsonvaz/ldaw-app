<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuarios;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    public function login(Request $request){
        
    $credentials = $request->only('email','password');
    $remember = $request->filled('recuerdame');

    if(Auth::attempt($credentials, $remember)){
        $request->session()->regenerate();
        return redirect('dashboard');
    }
    return redirect('login');  
    }

    public function logout(Redirector $redirect, Request $request){
        
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return $redirect->to('/dashboard');
        
    }

    public function registrarse(Request $request, Redirector $redirect){
        $usuario = new Usuarios();
        
        $usuario->name = $request->name;
        $usuario->apellido = $request->apellido;
        $usuario->celular = $request->celular;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password);

        $usuario->save();
        return $redirect->to('/dashboard');
    }
}

