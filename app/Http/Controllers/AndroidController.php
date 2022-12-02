<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use App\Models\Productos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Auth;
use Session;

class AndroidController extends Controller
{
//------------------------PRODUCTOS---------------------------//

//---------------tabla-------------//
public function lista(){
    $productos = Productos::all();
    return response()->json(['data'=> $productos], 200);
}

//---------------borrar producto--------------//
    public function borrar1p($idp){
        $productos = Productos::find($idp);
        $productos->delete();
        return response()->json(['message'=> "se elimino correctamente"], 200);

}
//--------------vista detalle--------------//
public function detalle($idp){
$productos = Productos::find($idp);
return response()->json(['data'=> $productos], 200);
}

//------------actualizar producto----------//
public function editar_producto($idp){
$productos = Productos::find($idp);
return response()->json(['message'=> "se actualizo correctamente"], 200);
}
///----------guardar actualizacion--------//
public function salvar(Productos $idp, Request $request){
if($request->file('fotop1') != ''){
 //---------------------------------Foto, videos, archivos, etc-------------
   $file = $request->file('fotop1');
   $foto = $file->getClientOriginalName();
  
   $date = date('Ymd_His_');
   $fotop = $date . $foto;
   \Storage::disk('local')->put($fotop, \File::get($file));
    }
     else{
      $fotop = $request->fotop;
}
   $query = Productos::find($idp->idp);
     $query->idp = $request->idp;
     $query->producto = $request->producto;
     $query->codigo = $request->codigo;
     $query->precio = $request->precio;
     $query->fotop = $fotop;
     $query->save();
     return response()->json(['message'=> "se guardo correctamente"], 200);
}

//------------------------USUARIOS------------------------//


public function listausuarios(){
    $usuarios = Usuarios::all();
    //return $usuarios;
    return response()->json(['data'=> $usuarios], 200);
}
//---------------Borrar usuario--------------///
public function borrar1u($idu){
    $usuarios = Usuarios::find($idu);
    $usuarios->delete();

    return response()->json(['message'=> "se elimino correctamente"], 200);

}
//--------------vista detalle--------------//
public function detalleusu($idu){
$usuarios = Usuarios::find($idu);
return response()->json(['data'=> $usuarios], 200);
}

//------------actualizar producto----------//
public function editar_usuario($idu){
$usuarios = Usuarios::find($idu);

return response()->json(['message'=> "se actualizo correctamente"], 200);
}
///----------guardar actualizacion--------//
public function salvarusu(Usuarios $idu, Request $request){
if($request->file('fotou1') != ''){
//---------------------------------Foto, videos, archivos, etc-------------
   $file = $request->file('fotou1');
   $foto = $file->getClientOriginalName();
  
   $date = date('Ymd_His_');
   $fotou = $date . $foto;
   \Storage::disk('local')->put($fotou, \File::get($file));
    }
     else{
      $fotou = $request->fotou;
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
     return response()->json(['message'=> "se guardo correctamente"], 200);

}


//----------------------------------Login----------------------------------------

 public function valida(Request $request){

$correo = 'al221810689@gmail.com';
// $password = 'onilink';

        //Consulta para obtener el usuario con el mismo correo 
        $usuarios = Usuarios::where('correo',$correo)->first();
        //return $usuarios;

    if($correo = $usuarios->correo){
        return response()->json(['data'=> $usuarios], 200);

    }else{

        return response()->json(['message'=> "no existe"], 200);
    }
}
}