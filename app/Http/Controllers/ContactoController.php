<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function ver_contacto(){
    return view('contacto');
    }
}