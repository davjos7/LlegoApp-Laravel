<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Usuario;


class UsuariosController extends Controller
{
    function registrar (Request $request) { //se pone request para capturar los datos, solo se una en get
        $datos = $request->all();
        $datos['contraseña']=sha1($datos['contraseña']);//sha1 sirve para encriptar la contraseña

        Usuario::create($datos); //aca va el modelo,
        echo "1   ";
    }

     function listado() {
         $usuarios = Usuario::get();
         return json_encode($usuarios);
     }
    // aca actualizas al gato
     function actualizar($id, Request $request){
         $datos = $request->all();
        $usuarios = Usuario::find($id);
         $usuarios->update($datos);
       echo 'Se actualizo correctamente';
    }
//  ELIMINAR
     function eliminar($id){
         $usuarios = Usuario::find($id);
        $usuarios->delete();
        echo 'Se mató correctamente';
    }

//  LOGIN
    function login(Request $request){
        $datos = $request->all();
        $usuarios = Usuario::where('correo', $datos['correo'])
                            ->where('contraseña', sha1($datos['contraseña']))
                            ->first();
    
        if($usuarios){
            return json_encode($usuarios);
        } else{
            return 0;
        }
    }




}
