<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Productos;


use Illuminate\Http\Request;

class MaquillajeController extends Controller
{
    public function ver_maquillaje(){
    

        $consulta= Productos::SELECT ('productos.producto','productos.precio','productos.fotop','productos.tipo')
        ->WHERE('tipo','maquillaje')->get()
        ;

        return view('productos/maquillaje')
        ->with('maquillaje',$consulta);
    }

}