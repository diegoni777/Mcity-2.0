<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\TecnologiaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\RopaController;
use App\Http\Controllers\CuentaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\AccesoriosController;
use App\Http\Controllers\TablapController;
use App\Http\Controllers\AndroidController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MaquillajeController;
use App\Http\Controllers\AdminpController;
use App\Http\Controllers\ContactoController;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CartController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//-------------------------usuarios-------------------------//
Route::get('/alta_usuarios',[UsuariosController::class, 'alta_usuarios']);
Route::post('/guarda_usuarios',[AndroidController::class, 'guarda_usuarios']);
//------------------------borrar------------------------------//
Route::name('/borrar1u')->delete('/borrar1u/{idu}',[AndroidController::class,'borrar1u']);

//------------------------detalle------------------------------//
Route::get('/detalleusu/{idu}',[AndroidController::class, 'detalleusu']);

//-------------------------actualizar------------------------//
Route::get('/editar_usuario/{idu}',[AndroidController::class, 'editar_usuario']);
Route::put('/salvarusu/{idu}',[AndroidController::class, 'salvarusu']);


//-----------------------productos---------------------------//
Route::get('registerP',[AndroidController::class,'alta_productos'])->name('registerP');
Route::get('alta_productos',[AndroidController::class,'alta_productos'])->name('alta_productos');
Route::post('guarda_productos',[AndroidController::class,'guarda_productos'])->name('guarda_productos');
//------------------------borrar------------------------------//
Route::name('borrar1p')->delete('/borrar1p/{idp}',[AndroidController::class,'borrar1p']);

//------------------------detalle------------------------------//
Route::name('detalle')->get('/detalle/{idp}',[AndroidController::class, 'detalle']);

//-------------------------actualizar------------------------//
Route::name('editar_producto')->get('/editar_producto/{idp}',[AndroidController::class, 'editar_producto']);
Route::name('salvar')->put('/salvar/{idp}',[AndroidController::class, 'salvar']);

//-------------------------consultas----------------------------//
Route::get('/productosLista',[AndroidController::class, 'lista']);
Route::get('/inicioadmin',[AndroidController::class, 'ver_inicio']);
Route::get('/usuariosLista',[AdminpController::class, 'listausuarios']);
Route::get('/adminv',[AndroidController::class, 'vista_ventas']);


//---------------------------------Android--------------------------------------//
//---------------------------------Usuario--------------------------------------//

Route::get('admin',[AndroidController::class,'lista'])->name('admin');

//------------------------borrar------------------------------//
Route::name('borrar1u')->delete('/borrar1u/{idu}',[AndroidController::class,'borrar1u']);

//------------------------detalle------------------------------//
Route::name('detalleusu')->get('/detalleusu/{idu}',[AndroidController::class, 'detalleusu']);

//-------------------------actualizar------------------------//
Route::name('editar_usuario')->get('/editar_usuario/{idu}',[AndroidController::class, 'editar_usuario']);
Route::name('salvarusu')->put('/salvarusu/{idu}',[AndroidController::class, 'salvarusu']);


//----------------------------Producto------------------------------------//

//------------------------borrar------------------------------//
Route::name('borrar1p')->delete('/borrar1p/{idp}',[AndroidController::class,'borrar1p']);

//------------------------detalle------------------------------//
Route::name('detalle')->get('/detalle/{idp}',[AndroidController::class, 'detalle']);

//-------------------------actualizar------------------------//
Route::name('editar_producto')->get('/editar_producto/{idp}',[AndroidController::class, 'editar_producto']);
Route::name('salvar')->put('/salvar/{idp}',[AndroidController::class, 'salvar']);
Route::get('valida',[AndroidController::class,'valida'])->name('valida');

