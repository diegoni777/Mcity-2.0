<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Productos;


use Illuminate\Http\Request;

class TecnologiaController extends Controller
{
    public function ver_tecnologia(){
    

        $consulta= Productos::SELECT ('productos.producto','productos.precio','productos.fotop','productos.tipo')
        ->WHERE('tipo','tecnologia')->get()
        ;

        return view('productos/tecnologia')
        ->with('consulta',$consulta);
    }

    
}