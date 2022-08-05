<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Productos;


class CartController extends Controller
{
    
    public function add(Request $request){
        //return $request;
        $producto = Productos::find($request->producto_id);
        //return $producto;
        Cart::add(
            $producto->idp, 
            $producto->producto, 
            $producto->precio, 
            1,           
        );
        //return Cart::getContent();
        return back()->with('success',"$producto->producto ¡se ha agregado con éxito al carrito!");
   
    }

    public function cart(){
        
        return view('carrito.checkout');
    }

    public function removeitem(Request $request) {
        //$producto = Producto::where('id', $request->id)->firstOrFail();
        Cart::remove([
        'id' => $request->id,
        ]);
        return back()->with('success',"Producto eliminado con éxito de su carrito.");
    }

    public function clear(){
        Cart::clear();
        return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");
    }

}