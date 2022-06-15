<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use App\Models\Eventos;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

    public function index(){
        $eventos = Eventos::all();

        return view('evento.index', compact('eventos'));
    }

    public function detalles($id_evento){
        $event = Eventos::find($id_evento);
        return $event;
        return view('evento.detalles', compact('event'));        
    }
}
