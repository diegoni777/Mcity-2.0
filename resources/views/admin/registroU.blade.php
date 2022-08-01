
<html lang="en">
<head>
<link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Usuario</title>
    

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
   
    
</head>
    
</head>
<center>
<body>
    <h1></h1>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="{{ URL::asset ('adminstyle/css/registrousu.css') }}" rel="stylesheet">
    <link href="{{ URL::asset ('adminstyle/css/input.css') }}" rel="stylesheet">

    <title>Registro de Usuario</title>
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
                    <h1 class="font-weight-bold mb-3">Registra El Nuevo Usuario</h1>
                    <div class="form-group">
                       </div>
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrar el Usuario.</p>
                    <div class="form-group mb-3">
                    <form action="{{ route ( 'guarda_admin' )}}" method="POST" enctype = 'multipart/form-data'>
    {{ csrf_field() }}


      <div class="login-container">
          <div class="login-info-container">
         <input class="input100" type="hidden" name="idu" value="{{$idesigue}}" placeholder="ID" disabled>

      

           <div class="inputBox">
          <label class="font-weight-bold">Usuario:</label>
          <input class="input" type="text"  name="nombre" required="required"><span>Nombre:</span>
          </div> 

          <div class="inputBox">   
       <input class="input" type="hidden" name="empresa " value="empresa fantasma" required="required"><span>Ingresa tu empresa:</span>
       </div> 

       <div class="inputBox"> 
       <input class="input" type="hidden"  value="microempresa "name="detalles" required="required"><span>Detalles de la empresa:</span>
      </div

        <td><label class="font-weight-bold">Foto de Perfil:<span class="text-danger"></label></td>
        <td><input class="input" type="file"  name="fotou"><br></td>

        <div class="inputBox"> 
       <label class="font-weight-bold">Correo:<span class="text-danger"></label>
        <input class="input" type="text" name="correo" required="required"><span>Ingresa tu correo:</span>
        </div>
        

      <div class="inputBox"> 
       <label class="font-weight-bold">Password:<span class="text-danger"></label>
      <input class="input" type="password" name="password" required="required"><span>Minimo 8 caracteres</span>
       </div>

       
       <div class="inputBox"> 
      <label class="font-weight-bold">Tipo de Usuario:</label>   
       <input class="input100" type="text" name="tipou" required="required"><span>Usuario o Admin</span>
       </div>
     
      
        <div class="g-recaptcha" data-sitekey="6LeupvUfAAAAAGcJ6PA5cQNMyY1wn0lRSvZgt2qE"></div>
 

        <button class="btn">Registrar Usuario </button> <a href="{{route('admin')}}" class="btn">Cancelar</a> 

            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>