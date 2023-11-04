<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function listaContactos(){
        return view('vercontactos');
    }
    public function agregarContacto(){
        return view('agregarcontacto');
    }
    public function guardarContacto (Request $request){
        $contacto = new Contacto();
        $contacto->nombre = $request->input('nombre');
        $contacto->apellido = $request->input('apellido');
        $contacto->telefono = $request->input('telefono');
        $contacto->save();
    }
}
