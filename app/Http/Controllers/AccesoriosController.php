<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Productos;


use Illuminate\Http\Request;

class AccesoriosController extends Controller
{
    public function ver_accesorios(){
    

        $consulta= Productos::SELECT ('productos.producto','productos.precio','productos.fotop','productos.tipo')
        ->WHERE('tipo','accesorios')->get()
        ;

        return view('productos/accesorios')
        ->with('accesorios',$consulta);
    }

}