<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventosController extends Controller
{
    function registrar (Request $request) {
        $datos = $request->all();
        Evento::create($datos); //aca va el modelo,
        echo 1;
    }

     function listado() {
         $eventos = Evento::get();
         return json_encode($eventos);
     }

     function detalle($id) {
        $evento = Evento::find($id);
        return json_encode($evento);
    }
    // aca actualizas al gato
     function actualizar($id, Request $request){
         $datos = $request->all();
        $eventos = Evento::find($id);
         $eventos->update($datos);
       echo 'Se actualizo correctamente';
    }
//  ELIMINAR
     function eliminar($id){
         $eventos = Evento::find($id);
        $eventos->delete();
        echo 1;
    }
}
