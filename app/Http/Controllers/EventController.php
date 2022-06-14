<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\Models\Eventos;

class EventController extends Controller
{
    public function addEvent(Request $request, Redirector $redirect){
        $evento = new Eventos();
        
        $evento->nombre = $request->nombre;
        $evento->siglas = $request->siglas;
        $evento->descripcion = $request->descripcion;
        $evento->duracion = $request->duracion;
        $evento->cupo = $request->cupo;
        $evento->costo = $request->costo;
        $evento->lugar = $request->lugar;
        $evento->activo = $request->activo;

        $evento->save();
        return $redirect->to('/dashboard');
    }
}
