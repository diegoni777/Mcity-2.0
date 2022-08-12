<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//-------------------------usuarios-------------------------//
Route::get('alta_usuarios',[UsuariosController::class,'alta_usuarios'])->name('alta_usuarios');
Route::post('guarda_usuarios',[UsuariosController::class,'guarda_usuarios'])->name('guarda_usuarios');
//------------------------borrar------------------------------//
Route::name('borrar1u')->delete('/borrar1u/{idu}',[AdminController::class,'borrar1u']);

//------------------------detalle------------------------------//
Route::name('detalleusu')->get('/detalleusu/{idu}',[AdminController::class, 'detalleusu']);

//-------------------------actualizar------------------------//
Route::name('editar_usuario')->get('/editar_usuario/{idu}',[AdminController::class, 'editar_usuario']);
Route::name('salvarusu')->put('/salvarusu/{idu}',[AdminController::class, 'salvarusu']);


//-----------------------productos---------------------------//
Route::get('registerP',[ProductosController::class,'alta_productos'])->name('registerP');
Route::get('alta_productos',[ProductosController::class,'alta_productos'])->name('alta_productos');
Route::post('guarda_productos',[ProductosController::class,'guarda_productos'])->name('guarda_productos');
//------------------------borrar------------------------------//
Route::name('borrar1p')->delete('/borrar1p/{idp}',[AdminpController::class,'borrar1p']);

//------------------------detalle------------------------------//
Route::name('detalle')->get('/detalle/{idp}',[AdminpController::class, 'detalle']);

//-------------------------actualizar------------------------//
Route::name('editar_producto')->get('/editar_producto/{idp}',[AdminpController::class, 'editar_producto']);
Route::name('salvar')->put('/salvar/{idp}',[AdminpController::class, 'salvar']);

//-------------------------consultas----------------------------//
Route::get('admin',[AdminController::class,'lista'])->name('admin');
Route::get('inicioadmin',[AdminController::class,'ver_inicio'])->name('inicioadmin');
Route::get('adminp',[AdminpController::class,'lista'])->name('adminp');
Route::name('adminv')->get('adminv',[ComprasController::class,'vista_ventas']);