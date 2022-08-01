<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use App\Models\Compras;
use App\Models\Productos;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Exports\UsuariosExport;
use App\Exports\VentasExport;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
{
    public function ver_inicio(){
        return view('admin/inicioadmin');
        }
        //Listar Usuarios//
    public function lista(){
        $usuarios = Usuarios::all();
        //return $usuarios;
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

    public function Reportes(){
    
    //return $usuarios;
    return view("admin/reportes");  
    }
    //-----------------------Reportes de Usuarios------------------------------
    public function ReporteUsuarios(){
        
    //Consulta que nos regresa todos los datos
    $usuarios = Usuarios::all();
    //el return nos devuelve los datos en forma de json para ver que nos devuelve la consulta
    //return $alumnos;
    //Mandamos los datos a una vista 

    $pdf  = PDF::loadView('reportes.ReporteUsuarios', compact('usuarios'));
    return $pdf->stream('usuarios.pdf');

    }

    public function ExportUsuarios() {
        return Excel::download(new UsuariosExport, 'Usuarios.xlsx');
    }
    //-------------------------REPORTES DE VENTAS---------------------------------
    public function ReporteVentas(){
        
        
        $ventas = Compras::all();
    
        $pdf  = PDF::loadView('reportes.ReporteVentas', compact('ventas'));
        return $pdf->stream('ventas.pdf');
    
        }
    
    public function ExportVentas() {
            return Excel::download(new VentasExport, 'Ventas.xlsx');
    }
    //-------------------------REPORTES DE Productos---------------------------------
    public function ReportProducts(){
        
        
        $products = Productos::all();
    
        $pdf  = PDF::loadView('reportes.ReportProducts', compact('products'));
        return $pdf->stream('Productos.pdf');
    
        }
    
    public function ExportProductos() {
            return Excel::download(new ProductsExport, 'Productos.xlsx');
    }



    


}
