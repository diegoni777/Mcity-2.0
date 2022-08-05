<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pagina de Administrador</title>
	<link href="{{ URL::asset ('adminstyle/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset ('adminstyle/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset ('adminstyle/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ URL::asset ('adminstyle/css/styles.css') }}" rel="stylesheet">
	<link href="{{ URL::asset ('adminstyle/css/modal.css') }}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<?php 
            $sessionusuario=session('sessionusuario');
        ?>
       
     
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="{{route('inicioadmin')}}"><span>Mcity</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="img/usu9.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><h5>  <?php echo $sessionusuario?> </h5></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="{{route('inicioadmin')}}"><em class="fa fa-dashboard">&nbsp;</em> Pagina principal</a></li>
      

			<li><a href="{{route('reportes')}}"><em class="fa fa-calendar">&nbsp;</em> Reportes</a></li>	

			<li><a href=""><em class="fa fa-bar-chart">&nbsp;</em> Historial</a></li>


		
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Registros <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="{{route('admin')}}">
						<span class="fa fa-arrow-right">&nbsp;</span>Usuarios
					</a></li>
					<li><a class="" href="{{route('adminp')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Productos
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Empresas
					</a></li>
          <li><a class="" href="{{route('adminv')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ventas
					</a></li>
				</ul>
			</li>

      <li><a href="{{route('principal')}}"><em class="fa fa-sign-out-alt">&nbsp;</em>Pagina de usuario</a></li>
	  <li>
				
				<input type="checkbox" id="btn-modal">
				<label for="btn-modal" class="lbl-modal"><em class="fa fa-power-off">&nbsp;</em> Cerrar Sesion </label>
	
	<div class="modal">
	<div  class="contenedor">
	
	<header>Advertencia</header>
	<label for="btn-modal">X</label>
	<div class="contenido">
	<center>
<img src="img/exclmacion2.jpg" width="100" height="100" alt="Product Image">
<h2> ¿Estas seguro?</h2>
<p> Estas a punto de cerrar sesion </p>
<a href="{{route('cerrarsession')}}"><em class="fa fa-sign-out">&nbsp;</em>Si ,Cerrar Sesion</a>  &nbsp; &nbsp; &nbsp;
<a href="{{route('inicioadmin')}}"><em class="fa fa-times-circle">&nbsp;</em>No ,Cancelar</a></li>

</center>

	
	
	</div>
	</div>
	</div>
	
	
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Pagina principal</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Administracion</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Productos Nuevos</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Comentarios positivos</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Envios Complteados</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Rembolsos</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Trafico del Sitio Web
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Grafica 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Grafica 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Grafica 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<div></div>
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">120</div>
							<div class="text-muted">Ordenes Nuevas</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted">Comentarios</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">Nuevos usuarios</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Vistas de la pagina</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>

		
		
		
			
	<script src="adminstyle/js/jquery-1.11.1.min.js"></script>
	<script src="adminstyle/js/bootstrap.min.js"></script>
	<script src="adminstyle/js/chart.min.js"></script>
	<script src="adminstyle/js/chart-data.js"></script>
	<script src="adminstyle/js/easypiechart.js"></script>
	<script src="adminstyle/js/easypiechart-data.js"></script>
	<script src="adminstyle/js/bootstrap-datepicker.js"></script>
	<script src="{{ URL::asset ('adminstyle/js//custom.js') }}"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>