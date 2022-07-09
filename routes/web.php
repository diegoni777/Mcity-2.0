<?php
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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComprasController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\MaquillajeController;
use App\Http\Controllers\AdminpController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//-----------login-----------//
    //ruta que manda a vista login//
    Route::get('auth/login',[LoginController::class,'login'])->name('login');

    //ruta validación de login//
    Route::post('valida',[LoginController::class,'valida'])->name('valida');
    
    //Ruta principal del sistema//
    Route::get('principal',[LoginController::class, 'principal'])->name('principal');
    Route::get('admin',[LoginController::class, 'admin'])->name('admin');

    //Alta nuevo usuario//
    Route::get('alta_usuarios',[UsuariosController::class,'alta_usuarios'])->name('alta_usuarios');
    Route::post('guarda_usuarios',[UsuariosController::class,'guarda_usuarios'])->name('guarda_usuarios');



//.......................productos.....................................//

Route::get('registerP',[ProductosController::class,'alta_productos'])->name('registerP');

Route::get('alta_productos',[ProductosController::class,'alta_productos'])->name('alta_productos');
Route::post('guarda_productos',[ProductosController::class,'guarda_productos'])->name('guarda_productos');


Route::name('tablap')->get('tablap',[ProductosController::class,'productos']);
Route::name('carrito')->get('carrito',[ProductosController::class,'carrito']);
Route::name('agregar')->get('agregar/{id}',[ProductosController::class,'agregar']);


//-------------------------Compras-------------------------------------------//
Route::name('guardar_compra')->post('guardar_compra',[ComprasController::class, 'guardar_compra']);

//---------------------Categorias-----------------//
Route::get('ropa',[RopaController::class,'ver_ropa'])->name('ropa');
Route::get('tecnologia',[TecnologiaController::class,'ver_tecnologia'])->name('tecnologia');
Route::get('maquillaje',[MaquillajeController::class,'ver_maquillaje'])->name('maquillaje');
Route::get('accesorios',[AccesoriosController::class,'ver_accesorios'])->name('accesorios');

//----------------------------Cuenta-------------------//
Route::get('cuenta',[CuentaController::class,'ver_cuenta'])->name('cuenta');
Route::get('contacto',[ContactoController::class,'ver_contacto'])->name('contacto');
Route::get('/',[InicioController::class,'ver_inicio'])->name('/');
Route::get('cerrarsession',[LoginController::class,'cerrarsession'])->name('cerrarsession');


//-------------------------empresa------------------------------//
Route::get('empresa',[EmpresaController::class,'registro_empresa'])->name('empresa');
Route::post('guarda_empresa',[EmpresaController::class,'guarda_empresa'])->name('guarda_empresa');
Route::get('tablae',[EmpresaController::class,'tablae'])->name('tablae');



//-------------------------consultas----------------------------//
Route::get('admin',[AdminController::class,'lista'])->name('admin');
Route::get('inicioadmin',[AdminController::class,'ver_inicio'])->name('inicioadmin');
Route::get('adminp',[AdminpController::class,'lista'])->name('adminp');


//-----------------------productos---------------------------//
//------------------------borrar------------------------------//
Route::name('borrar1p')->delete('/borrar1p/{idp}',[AdminpController::class,'borrar1p']);

//------------------------detalle------------------------------//
Route::name('detalle')->get('/detalle/{idp}',[AdminpController::class, 'detalle']);

//-------------------------actualizar------------------------//
Route::name('editar_producto')->get('/editar_producto/{idp}',[AdminpController::class, 'editar_producto']);
Route::name('salvar')->put('/salvar/{idp}',[AdminpController::class, 'salvar']);


//-------------------------usuarios-------------------------//
//------------------------borrar------------------------------//
Route::name('borrar1u')->delete('/borrar1u/{idu}',[AdminController::class,'borrar1u']);

//------------------------detalle------------------------------//
Route::name('detalleusu')->get('/detalleusu/{idu}',[AdminController::class, 'detalleusu']);

//-------------------------actualizar------------------------//
Route::name('editar_usuario')->get('/editar_usuario/{idu}',[AdminController::class, 'editar_usuario']);
Route::name('salvarusu')->put('/salvarusu/{idu}',[AdminController::class, 'salvarusu']);


Route::name('guardar_compra')->get('guardar_compra',[ComprasController::class,'guardar_compra']);
Route::name('adminv')->get('adminv',[ComprasController::class,'vista_ventas']);
Route::name('vista_compras')->get('vista_compras',[ComprasController::class,'vista_compras']);
