<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="{{ URL::asset ('plantilla/css/style2.css') }}">


    <title>Registrate</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
</head>
<body>
<form action="{{ route ( 'guarda_usuarios' )}}" method="POST" enctype = 'multipart/form-data'>
    {{ csrf_field() }}


      <div class="login-container">
          <div class="login-info-container">
           
            <h2 class="title">Registrate</h2>

          
           
          
            
            <input class="input100" type="text" name="idu" value="{{$idesigue}}" placeholder="ID" disabled>

            <label >Usuario</label>
        <input class="input" type="text" placeholder="Usuario123" name="nombre"  >

        
        <input class="input" type="hidden" placeholder="Ingresa tu Empresa" name="empresa" value="empresa fantasma" ><br>

        <label >detalles</label>
        <input class="input" type="hidden" name="detalles" value="empresa"  >

        <label >Foto de Perfil</label>
        <input class="input" type="file" name="fotou"  ><br>

        <label >Correo</label>
        <input class="input" type="text" placeholder="ejemplo@gmail.com" name="correo"  ><br>

        <label >Password</label>
        <input class="input" type="password" placeholder="*******" name="password"  ><br>

       
        
        <input class="input100" type="hidden" name="tipou" value="usuario" placeholder="Tipo usuario" readonly >
        
      
        <div class="g-recaptcha" data-sitekey="6LeupvUfAAAAAGcJ6PA5cQNMyY1wn0lRSvZgt2qE"></div>
      <br/>
      

        <button class="btn">Registrate </button>    <br>  

            </form>
            
          </div>
            <img class="image-container" src="{{ URL::asset ('img/login.svg') }}" alt="">
      </div>

</body>
</html>