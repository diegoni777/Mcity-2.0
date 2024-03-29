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
	<link href="{{ URL::asset ('adminstyle/css/table.css') }}" rel="stylesheet">
	
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
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">Hace 3 minutos</small>
										<a href="#"><strong>Diego</strong> Comentado <strong>Tu foto</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2022</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">Hace 1 hora</small>
										<a href="#">mensaje nuevo <strong>Jose paquito</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2022</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>Todos los mensajes</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 mensaje nuevo
									<span class="pull-right text-muted small">hace 3 minitos</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 likes nuevos
									<span class="pull-right text-muted small">Hace 4 minutos</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 Nuevos seguidores
									<span class="pull-right text-muted small">Hace 4 minutos</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><h5>  <?php echo $sessionusuario?> </h5></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Conectado</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Buscar">
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
					<li><a class="" href="">
						<span class="fa fa-arrow-right">&nbsp;</span> Empresas
					</a></li>
          <li><a class="" href="{{route('adminv')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Ventas
					</a></li>
				</ul>
			</li>

      <li><a href="{{route('principal')}}"><em class="fa fa-sign-out-alt">&nbsp;</em>Pagina de usuario</a></li>
			<li><a href="{{route('login')}}"> <em class="fa fa-power-off">&nbsp;</em> Cerrar sesion</a></li>
		</ul>
	</div><!--/.sidebar-->
		
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
				<h1 class="page-header">Tablero</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">120</div>
							<div class="text-muted">Nuevas ordenes</div>
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
							<div class="text-muted">usuarios nuevos</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Vistas de pagina</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		
		<div class="therichpost-panel">
    <div class="therichpost-row-padding" style="margin:0 -16px">
      <div class="therichpost-third">
        <h2>CRUDS xD</h2>
      </div>
	  <p style="text-align: right">
		<a href="{{ route('ReporteUsuarios') }}"> pdf</a>
	</p>

	<a  style="text-align: right" href="{{ route('ExportUsuarios') }}" >
		exportar Usuarios
	</a>


      <div class="therichpost-twothird">
        <h4>Vista de Usuarios</h4>
<a href="{{route('alta_usuarios2')}}" class="btn btn-info"> Nuevo Usuario</a>
        <center>
        <table class="table table-bordered border-primary" witdh="100">
<thead>
          <tr>
           
              <td>ID</td>
              <td>nombre</td>
              <td>empresa</td>
              <td>detalles</td>
              <td>tipo</td>
              <td>correo</td>
              <td>foto</td>
			  <td>Opciones</td>
             </tr>
</thead>
             @foreach($usuarios as $usuarios)
             <tr>
                  <td>{{ $usuarios->idu }}</td>
                  <td>{{ $usuarios->nombre }}</td>
                  <td>{{ $usuarios->empresa }}</td>
                  <td>{{ $usuarios->detalles}}</td>
                  <td>{{ $usuarios->tipou }}</td>
                  <td>{{ $usuarios->correo }}</td>
                  <td> <img src="{{ asset('archivos/'. $usuarios->fotou)}}"  width="80" height="100" alt="User Image"></td>
                  
                  <td>
				  		<form action="{{ route('detalleusu',['idu' => $usuarios->idu]) }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('GET') }}
                            <input type="submit" class="btn btn-info" value="Detalle">
                       	</form>
					   	<form action="{{ route('editar_usuario',['idu' => $usuarios->idu]) }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('GET') }}
                            <input type="submit" class="btn btn-success" value="Editar">
                       	</form>
					
                    <form action="{{ route('borrar1u',['idu'=> $usuarios->idu]) }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                            <input type="submit" class="btn btn-danger" value="Borrar">
                       </form>
                       <a href="">Inhabilitar</a>
                  </td>
             </tr>
             @endforeach

     
 
        </table>
        </center>
</div>
        
      </div>
    </div>
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