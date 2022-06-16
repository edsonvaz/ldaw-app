<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\Models\Eventos;
use App\Models\Asistentes;

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

    public function addAttendee(Request $request, Redirector $redirect){
        $asistente = new Asistentes();
        
        $asistente->nombres = $request->nombres;
        $asistente->apellido = $request->apellido;
        $asistente->edad = $request->edad;
        $asistente->celular = $request->celular;
        $asistente->estado_residencia = $request->estado_residencia;
        $asistente->correo_electronico = $request->correo_electronico;
        $asistente->instituto = $request->instituto;

        $asistente->save();
        return $redirect->to('/dashboard');
    }
}
