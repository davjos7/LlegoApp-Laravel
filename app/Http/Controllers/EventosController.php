<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventosController extends Controller
{
    function registrar (Request $request) {
        $datos = $request->all();
        Evento::create($datos); //aca va el modelo,
        echo "Se inserto correctamente";
    }

     function listado() {
         $eventos = Evento::get();
         return json_encode($eventos);
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
        echo 'Se mató correctamente';
    }
}
