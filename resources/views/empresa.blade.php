<!DOCTYPE html>
<html lang="en">
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
	<link rel="icon" type="image/png" href="{{ asset('img/mcity.png') }}">
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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
</head>



<body>


<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('guarda_empresa') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
				
					<span class="login100-form-title p-b-43">
						Registra tu Empresa
					</span>
					

          <label for="">Nombre de la Empresa</label><br>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="nombre" placeholder="Nombre" required>
					
					</div>


          <label for="">Nombre del Dueño</label> <br>
          <div class="wrap-input100">
              <input class="input100" type="text" name="jefe" value="" placeholder="jefe" required>
          </div><br>
    

          <label for="">Detalles</label> <br>
          <div class="wrap-input100">
              <input class="input100" type="text" name="detalles" value="" placeholder="Detalles" required>
          </div><br>

          <label for="">slogan</label> <br>
          <div class="wrap-input100">
              <input class="input100" type="text" name="slogan" value="" placeholder="slogan" required>
          </div><br>

          <label for="">Categoria</label> <br>
          <div class="wrap-input100">
              <input class="input100" type="text" name="categoria" value="" placeholder="slogan" required>
          </div><br>
    
          <label for="">Logo de la empresa</label>
          <div >
              <input class="input100" type="file" name="fotoe" value="" placeholder="ID" >
          </div><br>


          <b id="nivel"></b><br>
          <b id="error"></b><br>
          <br>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" >
							Registrate
						</button>
					</div>
					
					

					
				</form>

				<div class="login100-more" style="background-image: url('img/empresas.jpg');">
				</div>
			</div>
		</div>
	</div>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>