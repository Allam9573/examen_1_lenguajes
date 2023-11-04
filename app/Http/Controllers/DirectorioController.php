<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectorioController extends Controller
{
    public function index(){
        return view('directorio');
    }
    public function crearEntrada(){
        return view('crearEntrada');
    }
    public function buscar(){
        return view('buscar');
    }
    public function eliminar(){
        return view('eliminar');
    }
}
