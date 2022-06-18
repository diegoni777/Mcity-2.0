<!DOCTYPE html>
<html lang="es-mx">
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro de Usuarios</title>
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        
    </head>
    <style>
    @import "compass/css3";

$body-bg: #c1bdba;
$form-bg: #13232f;
$white: #ffffff;

$main: #1ab188;
$main-light: lighten($main,5%);
$main-dark: darken($main,5%);

$gray-light: #a0b3b0;
$gray: #ddd;

$thin: 300;
$normal: 400;
$bold: 600;
$br: 4px;

div {
  background-color: blue;
  color: white;
}

html {
	overflow-y: scroll; 
}

body {
  background:$body-bg;
  font-family: 'Titillium Web', sans-serif;
  color: white;
}

a {
  text-decoration:none;
  color:$main;
  transition:.5s ease;
  &:hover {
    color:$main-dark;
  }
}

.form {
  
  padding: 40px;
  max-width:600px;
  margin:40px auto;
  border-radius:$br;
}

.tab-group {
  list-style:none;
  padding:0;
  margin:0 0 40px 0;
  &:after {
    content: "";
    display: table;
    clear: both;
  }
  li a {
    display:block;
    text-decoration:none;
    padding:15px;
    background:rgba($gray-light,.25);
    color:$gray-light;
    font-size:20px;
    float:left;
    width:50%;
    text-align:center;
    cursor:pointer;
    transition:.5s ease;
    &:hover {
      background:$main-dark;
      color:$white;
    }
  }
  .active a {
    background:$main;
    color:$white;
  }
}

.tab-content > div:last-child {
  display:none;
}


h1 {
  text-align:center;
  color:$white;
  font-weight:$thin;
  margin:0 0 40px;
}

label.highlight {
	color:$white;
}

input, textarea {
  font-size:22px;
  display:block;
  width:100%;
  height:100%;
  padding:5px 10px;
  background:none;
  background-image:none;
  border:1px solid $gray-light;
  color: white;
  border-radius:0;
  transition:border-color .25s ease, box-shadow .25s ease;
  &:focus {
		outline:0;
		border-color:$main;
  }
}

textarea {
  border:2px solid $gray-light;
  resize: vertical;
}

.top-row {
  &:after {
    content: "";
    display: table;
    clear: both;
  }
}

.button {
  border:0;
  outline:none;
  border-radius:0;
  padding:15px 0;
  font-size:2rem;
  font-weight:$bold;
  text-transform:uppercase;
  letter-spacing:.1em;
  background:$main;
  color:$white;
  transition:all.5s ease;
  -webkit-appearance: none;
  &:hover, &:focus {
    background:$main-dark;
  }
}

.button-block {
  display:block;
  width:100%;
}

.forgot {
  margin-top:-20px;
  text-align:right;
}
    </style>

<body>
    
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
</html>