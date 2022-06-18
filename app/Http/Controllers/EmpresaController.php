<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Empresas;


use Illuminate\Http\Request;




class EmpresaController extends Controller
{
    public function registro_empresa(){
        return view('empresa');
        }
        

    public function guarda_empresa(Request $request){ 
        
        $file = $request->file('fotoe');
        if($file<>""){
          $img = $file->getClientOriginalName();
          $img2 = $request->ide . $img;
          \Storage::disk('local')->put($img2, \File::get($file));
        }
        else{
          $img2 = "sinfoto.png";
        }

             
        $empresa = new Empresas;
        $empresa -> nombre = $request-> nombre;
        $empresa -> detalles = $request-> detalles;
        $empresa -> slogan = $request-> slogan;
        $empresa -> jefe = $request-> jefe;
        $empresa -> categoria = $request-> categoria;
        $empresa->fotoe = $img2;

        $empresa -> save();
        return redirect()->route('/');
  }
        


    
    public function tablae(){
    

        $empresas= Empresas::SELECT ('empresas.nombre','empresas.detalles','empresas.fotoe','empresas.categoria')
        ->get()
        ;

        return view('empresa/tablae')
        ->with('empresas',$empresas);
    }
}
