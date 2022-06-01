<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Productos;


use Illuminate\Http\Request;

class RopaController extends Controller
{
    public function ver_ropa(){
    

        $consulta= Productos::SELECT ('productos.producto','productos.precio','productos.fotop','productos.tipo')
        ->WHERE('tipo','ropa')->get()
        ;

        return view('productos/ropa')
        ->with('consulta',$consulta);
    }

    
}
