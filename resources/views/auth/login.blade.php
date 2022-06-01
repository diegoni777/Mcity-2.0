<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Iniciar sesión</title>
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    </head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="{{ route ('valida') }}" method="POST">
    {{ csrf_field() }}

        <h3>Mcity</h3>
        @if (session('status'))
		    <div class="alert alert-danger">
		        {{ session('status') }}
		    </div>
	    @endif

        <label for="username">Correo</label>
        <input type="text" placeholder="Ingresa tu correo Electronico" name="correo" id="correo" >

        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña" name="password" id="password">

        <button>Log In</button>
        <div class="social">
            <div class="go"><a href="{{ route('alta_usuarios') }}">Registrarme</a></div>
        </div>

    </form>

</body>
</html>