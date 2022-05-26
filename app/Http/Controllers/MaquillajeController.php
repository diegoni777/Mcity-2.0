<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Productos;


use Illuminate\Http\Request;

class MaquillajeController extends Controller
{
    public function ver_maquillaje(){
    

        $consulta= Productos::SELECT ('Productos.producto','Productos.precio','Productos.fotop','Productos.tipo')
        ->WHERE('tipo','maquillaje')->get()
        ;

        return view('productos/maquillaje')
        ->with('maquillaje',$consulta);
    }

}