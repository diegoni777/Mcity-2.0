<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="{{ URL::asset ('plantilla/css/style2.css') }}">


    <title>Login</title>
</head>
<body>
<form action="{{ route ('valida') }}" method="POST">
    {{ csrf_field() }}

        
        @if (session('status'))
		    <div class="alert alert-danger">
		        {{ session('status') }}
		    </div>
	    @endif

      <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">Micty Store</h1>

            <div class="social-login">
                <div class="social-login-element">
                    <img src="{{ URL::asset ('img/google.svg') }}" alt="google-image">
                    <span>Google</span>
                </div>


                <div class="social-login-element">
                    <img src="{{ URL::asset ('img/facebook.svg') }}" alt="facebook-image">
                    <span>Facebook</span>
                </div>
            </div>

            <p>o</p>
            <form class="inputs-container">
            <label for="username">Correo</label>
        <input class="input" type="text" placeholder="Ingresa tu correo Electrónico" name="correo" id="correo" >

        <label for="password">Contraseña</label>
        <input class="input" type="password" placeholder="Contraseña" name="password" id="password">

                <p>Olvidaste tu contraseña? <span class="span">Click aqui</span></p>
                <button class="btn">Iniciar Sesion</button>

                <p>No tienes una cuenta? <a class="span" href="{{ route('alta_usuarios') }}">Registrate</a></p>
            </form>
          </div>
            <img class="image-container" src="{{ URL::asset ('img/login.svg') }}" alt="">
      </div>

</body>
</html>