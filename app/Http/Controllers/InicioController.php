<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function ver_inicio(){
    return view('inicio');
    }
}