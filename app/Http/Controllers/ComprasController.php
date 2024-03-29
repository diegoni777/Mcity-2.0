<?php

namespace App\Http\Controllers;
use App\Models\Compras;
use DB;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function guardar_compra(Request $request){
      //return $request;

        $file = $request->file('fotop');
        if($file<>""){
          $img = $file->getClientOriginalName();
          $img2 = $request->idp . $img;
          \Storage::disk('local')->put($img2, \File::get($file));
        }
        else{
          $img2 = "sinfoto.png";
        }
        $id_usuario=session('idusuario');
        $compra = new Compras;
        $compra->id = $request->id;
        $compra->fotop = $request->fotop;
        $compra->producto = $request->producto;
        $compra->precio = $request->precio;
        $compra->cantidad = $request->cantidad;
        $compra->sub_total = $request->sub_total;
        $compra->total = $request->total;
        $compra->id_usuario = $id_usuario;
        $compra->save();
        return redirect()->back()->with('success','Compra con exito');
        
    }

    
      //---------------tabla-------------//
      public function vista_ventas(){
        $consulta = compras::all();
        return view("admin/adminV")
        ->with(['consulta' => $consulta]);
    }

    public function vista_compras(){
      $idusuario=session('idusuario');
    $consulta = DB::SELECT("SELECT*FROM compras WHERE id_usuario = '$idusuario'");
    return view('carrito/vista-compras')
    ->with('consulta',$consulta);
  }
}