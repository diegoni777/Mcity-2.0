<!doctype html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ URL::asset ('adminstyle/css/registropro.css') }}" rel="stylesheet">

    <title>Registro de Producto</title>
  </head>
  <body>
   <section class="contact-box">
       <div class="row no-gutters bg-dark">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">La siguiente revolución digital.</h3>
                <p class="lead text-light">La nueva etapa de la revolución digital se aproxima.</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Registra El Nuevo Producto</h1>
                    <div class="form-group">
                       </div>
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrar el producto.</p>
                    
                   
            <form action="{{ route ( 'guarda_productos' )}}" method="POST" enctype = 'multipart/form-data'>
            
            {{ csrf_field() }}

            <div class="login-container">
          <div class="login-info-container">

            <div class="form-group mb-3">
            <label class="font-weight-bold">Id producto<span class="text-danger">*</span></label>
           <input class="input100" type="text" name="idp" value="{{$iddespues}}" placeholder="ID" disabled >
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div>

<table>
<tr>
    
                <div class="form-group mb-3">
                <td><label class="font-weight-bold">Producto:<span class="text-danger">* </span></label></td>
                <td><input class="input100" type="text" name="producto" value="" placeholder="Nombre Producto"></td>
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div>
</tr>
<tr>  
                <div class="form-group mb-3">
               <td><label class="font-weight-bold">Codigo:<span class="text-danger">*</span></label></td>
               <td><input class="input100" type="text" name="codigo" value="" placeholder="codigo de verificacion"></td>
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div>
</tr>
<tr>   
                <div class="form-group mb-3">
               <td><label class="font-weight-bold">Tipo de Producto <span class="text-danger">*</span></label></td>
               <td><input class="input100" type="text" name="tipo" value="" placeholder="Catergoria" ></td>
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div>
</tr>
<tr>   
                <div class="wrap-input100">
                <td><label class="font-weight-bold">Precio<span class="text-danger">*</span></label></td>
                <td><input class="input100" type="text" name="precio" value="" placeholder="precio"></td>
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div>
</tr>
<tr>    
                <div class="wrap-input100">
               <td><label class="font-weight-bold">Foto del producto <span class="text-danger">*</span></label></td>
               <td><input class="input100" type="file" name="fotop" value="" placeholder="ID" ></td>
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            </span>
                </div>
</tr>
</table>  
    
                <div>
                    <button class="btn">Guardar Producto</button> <a href="{{route('adminp')}}" class="btn">Cancelar</a>
                </div>
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>