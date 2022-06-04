<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    
    
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('plantilla/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plantilla/css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
        
    </head>

<body>

<div class="sticky-top">
  <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ asset('img/logo.png')  }}" alt="" width="50" height="34" class="d-inline-block align-text-top">
      Patina La Vida
    </a>
    
    <h1>Registro Usuarios</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1200px-User_icon_2.svg.png" alt="Usuario" width="90px" height="90px" >
        <div class="container">
            
            <form action="{{ route ( 'guarda_usuarios' )}}" method="POST" enctype = 'multipart/form-data'>
            {{ csrf_field() }}

                <div class="wrap-input100" style="display: none;">
                    <label for="">id usuario</label>
                    <input class="input100" type="text" name="idu" value="{{$idesigue}}" placeholder="ID" disabled>
                    <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                </div><br>
                
                <div class="wrap-input100" style=" color: white">
                    <label for="">Inserta tu Usuario</label><i class="fa fa-user" aria-hidden="true"></i>
                    <input class="input100" type="text" name="nombre" value="" placeholder=" Usuario" >
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Empresa</label><i class="fa fa-industry" aria-hidden="true"></i>
                    <input class="input100" type="text" name="empresa" value="" placeholder="Empresa" >
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Detalles</label><i class="fa fa-info" aria-hidden="true"></i>
                    <input class="input100" type="text" name="detalles" value="" placeholder="Detalles" >
                </div><br>
    
                <div class="wrap-input100" style="display: none;">
                    <label for="">Tipo usuario</label><i class="fa fa-user" aria-hidden="true"></i>
                    <input class="input100" type="text" name="tipou" value="usuario" placeholder="Tipo usuario" readonly >
                    
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Foto de perfil</label><i class="fa fa-camera" aria-hidden="true"></i>
                    <input class="input100" type="file" name="fotou" value="" placeholder="ID" >
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Correo</label><i class="fa fa-envelope" aria-hidden="true"></i>
                    <input class="input100" type="text" name="correo" value="" placeholder="Correo" >
                </div><br>
    
                <div class="wrap-input100">
                    <label for="">Password</label><i class="fa fa-key" aria-hidden="true"></i>
                    <input class="input100" type="password" name="password" value="" placeholder="Password">
                </div><br>
    
                <div>
                    <button>guardar usuario</button>
                </div>
            </form>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>