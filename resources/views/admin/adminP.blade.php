<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pagina de administrador</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://bootswatch.com/5/cyborg/bootstrap.min.css">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="plantilla/css/admin.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset ('plantilla/css/admin.css') }}">     
       
       
       
       </style>
       
    </head>
    <body class="therichpost-light-grey">
        <!-- Top container -->
<div class="therichpost-bar therichpost-top therichpost-black therichpost-large" style="z-index:4">
  <button class="therichpost-bar-item therichpost-button therichpost-hide-large therichpost-hover-none therichpost-hover-text-light-grey" onclick="therichpost_open()"><i class="fa fa-bars"></i>  Menu</button>
  <span class="therichpost-bar-item therichpost-right">Logo</span>
</div>
<!-- Sidebar/menu -->
<nav class="therichpost-sidebar therichpost-collapse therichpost-white therichpost-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="therichpost-container therichpost-row">
    <div class="therichpost-col s4">
      <img src="img/usu9.png" alt="Logo" class="therichpost-circle therichpost-margin-right" style="width:90px">
    </div>
    <div class="therichpost-col s8 therichpost-bar">
    <?php 
            $sessionusuario=session('sessionusuario');
        ?>
      <span>Bienvenido, <strong>  
    <p> <?php echo $sessionusuario?> </strong></span></p><br>
     
    </div>
  </div>
  <hr>
  <div class="therichpost-container">
    <h5>Pagina de administracion</h5>
  </div>
  <div class="therichpost-bar-block">
    <a href="#" class="therichpost-bar-item therichpost-button therichpost-padding-16 therichpost-hide-large therichpost-dark-grey therichpost-hover-black" onclick="therichpost_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="{{route('admin')}}" class="therichpost-bar-item therichpost-button therichpost-padding therichpost-blue"><i class="fa fa-users fa-fw"></i>Usuarios</a>
    <a href="{{route('adminp')}}" class="therichpost-bar-item therichpost-button therichpost-padding"><i class="fa fa-eye fa-fw"></i>  Productos</a>
    <a href="{{route('adminv')}}" class="therichpost-bar-item therichpost-button therichpost-padding"><i class="fa fa-users fa-fw"></i> Ventas</a>
    <a href="#" class="therichpost-bar-item therichpost-button therichpost-padding"><i class="fa fa-cog fa-fw"></i>  Historial</a><br><br>
    <a href="{{route('principal')}}" class="therichpost-bar-item therichpost-button therichpost-padding"> Pagina Principal</a><br><br>
    
  </div>
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="therichpost-overlay therichpost-hide-large therichpost-animate-opacity" onclick="therichpost_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="therichpost-main" style="margin-left:300px;margin-top:43px;">
  <!-- Header -->
  <header class="therichpost-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Datos de la pagina</b></h5>
  </header>
  <div class="therichpost-row-padding therichpost-margin-bottom">
    <div class="therichpost-quarter">
      <div class="therichpost-container therichpost-red therichpost-padding-16">
        <div class="therichpost-left"><i class="fa fa-comment therichpost-xxxlarge"></i></div>
        <div class="therichpost-right">
          <h3></h3>
        </div>
        <div class="therichpost-clear"></div>
        <h4>Detalles de venta</h4>
      </div>
    </div>
    <div class="therichpost-quarter">
      <div class="therichpost-container therichpost-blue therichpost-padding-16">
        <div class="therichpost-left"><i class="fa fa-eye therichpost-xxxlarge"></i></div>
        <div class="therichpost-right">
          <h3></h3>
        </div>
        <div class="therichpost-clear"></div>
        <h4>Productos</h4>
      </div>
    </div>
    <div class="therichpost-quarter">
      <div class="therichpost-container therichpost-teal therichpost-padding-16">
        <div class="therichpost-left"><i class="fa fa-share-alt therichpost-xxxlarge"></i></div>
        <div class="therichpost-right">
          <h3></h3>
        </div>
        <div class="therichpost-clear"></div>
        <h4>Historial</h4>
      </div>
    </div>
    <div class="therichpost-quarter">
      <div class="therichpost-container therichpost-orange therichpost-text-white therichpost-padding-16">
        <div class="therichpost-left"><i class="fa fa-users therichpost-xxxlarge"></i></div>
        <div class="therichpost-right">
          <h3></h3>
        </div>
        <div class="therichpost-clear"></div>
        <h4>Usuarios</h4>
      </div>
    </div>
  </div>


  
  <div class="therichpost-panel">
    <div class="therichpost-row-padding" style="margin:0 -16px">
      <div class="therichpost-third">
        <h5>CRUDS</h5>
        <img src="{{ asset('img/crud2.png') }}" style="width:100%" alt="Google Regional Map">
      </div>
      <div class="therichpost-twothird">
        <h5>Vista de crud</h5>


        <table class="scroll" class="table table-hover">
          <tr>
           
              <td>ID</td>
              <td>producto</td>
              <td>codigo</td>
              <td>tipo</td>
              <td>precio</td>
              <td>fotop</td>
             </tr>
             @foreach($productos as $productos)
             <tr>
                  <td>{{ $productos->idp }}</td>
                  <td>{{ $productos->producto }}</td>
                  <td>{{ $productos->codigo }}</td>
                  <td>{{ $productos->tipo }}</td>
                  <td>{{ $productos->precio}}</td>
                  <td>{{ $productos->fotop }}</td>
                  
                  
                  
                  <td>
                      <a href="{{ route('detalle',['idp' => $productos->idp]) }}" >Detalle</a>
                      <a href="{{ route('editar_producto',['idp' => $productos->idp]) }}" >Editar</a>

                    <form name="borrar1" action="{{ route('borrar1',['idp'=> $productos->idp]) }}" method="POST">
                          {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                            <input type="submit" value="Borrar">
                       </form>
                       
                  </td>
             </tr>
             @endforeach

     
 
        </table>
        <a href="{{route('alta_productos')}}" class="therichpost-bar-item therichpost-button therichpost-padding">Nuevo Producto</a>
      </div>
    </div>
  </div>
  <hr>
 
 
 
  <!-- Footer -->
  <footer class="therichpost-container therichpost-padding-16 therichpost-light-grey">
   
  </footer>
  <!-- End page content -->
</div>
<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");
// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");
// Toggle between showing and hiding the sidebar, and add overlay effect
function therichpost_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}
// Close the sidebar with the close button
function therichpost_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>
 </body>
</html>
