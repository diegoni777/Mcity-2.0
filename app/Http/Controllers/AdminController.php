<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class AdminController extends Controller
{
    public function ver_inicio(){
        return view('admin/inicioadmin');
        }
        //Listar Usuarios//
    public function lista(){
        $usuarios = Usuarios::all();
        return view("admin/admin")
        ->with(['usuarios' => $usuarios]);  
    }
    //---------------Borrar usuario--------------///
    public function borrar1u($idu){
        $usuarios = Usuarios::find($idu);
        $usuarios->delete();
        return redirect()->route('admin');
   
}
//--------------vista detalle--------------//
public function detalleusu($idu){
    $usuarios = Usuarios::find($idu);
    return view("admin/detalleusu")
    ->with(['usuarios' => $usuarios]);
}

//------------actualizar producto----------//
public function editar_usuario($idu){
    $usuarios = Usuarios::find($idu);
    return view("admin/editar_usuario")
    ->with(['usuarios' => $usuarios]);
}
///----------guardar actualizacion--------//
public function salvarusu(Usuarios $idu, Request $request){
    if($request->file('fotop1') != ''){
 //---------------------------------Foto, videos, archivos, etc-------------
       $file = $request->file('fotop1');
       $foto = $file->getClientOriginalName();
      
       $date = date('Ymd_His_');
       $fotou = $date . $foto;
       Storage::disk('local')->put($fotou, \File::get($file));
        }
         else{
          $fotou = $request->fotop;
  }
       $query = Usuarios::find($idu->idu);
         $query->idu = $request->idu;
         $query->nombre = $request->nombre;
         $query->empresa = $request->empresa;
         $query->detalles = $request->detalles;
         $query->tipou = $request->tipou;
         $query->correo = $request->correo;
         $query->fotou = $fotou;
         $query->save();
         return redirect()->route('detalleusu', ['idu' => $idu->idu]);
  }


}