<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>M city</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="plantilla/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="plantilla/lib/slick/slick.css" rel="stylesheet">
        <link href="plantilla/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="plantilla/css/style.css" rel="stylesheet">
    </head>

    <body>
            <!-- Top bar Start -->
            <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                    <?php 
            $sessionusuario=session('sessionusuario');
        ?>
       <p>  <?php echo $sessionusuario?> </p>
     
     </div>
     <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +55 722 878 3341
                    </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">


                            <?php 
                             
                           
                                     
            $sessionusuario=session('idusuario');
                             ?>

                            @if($sessionusuario = null)
                            <a href="{{route('principal')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{route('tablap')}}" class="nav-item nav-link">Productos</a>
                            <a href="{{route('tablae')}}" class="nav-item nav-link">Empresas</a>
                            <a href="{{route('cart.checkout')}}" class="nav-item nav-link">Carrito<span class="badge badge-danger">{{count(Cart::getContent())}}</span></a>
                            <a href="{{route('vista_compras')}}" class="nav-item nav-link">Compras realizadas</a>
                            <a href="{{route('contacto')}}" class="nav-item nav-link">Conocenos</a>
                            <a href="{{route('login')}}" class="nav-item nav-link">Iniciar sesion</a>

                             
                             @else
                             <a href="{{route('principal')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{route('tablap')}}" class="nav-item nav-link">Productos</a>
                            <a href="{{route('tablae')}}" class="nav-item nav-link">Empresas</a>
                            <a href="{{route('carrito')}}" class="nav-item nav-link">Carrito</a>
                            <a href="{{route('vista_compras')}}" class="nav-item nav-link">Compras realizadas</a>
                            <a href="{{route('contacto')}}" class="nav-item nav-link">Conocenos</a>
                            

                            <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Cuenta</a>
                                <div class="dropdown-menu">
                                <a href="{{route('cuenta')}}" class="nav-item nav-link">Mi cuenta</a>

                                <form name="cerrarsesison" action="{{route('cerrarsession')}}" method="GET">
                                
                                <button type="submit" class="btn btn-xs btn-danger btn-flat show-alert-delete-box btn-sm" data-toggle="tooltip" title='Delete'>cerrar session</button>
</form>
                                </div>
                            </div>
                        </div>

                           
                             
                @endif
                        
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                        <a href="{{route('principal')}}" class="nav-item nav-link active">
                                <img src="img/mcitylogo.jpeg" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End -->       
        
        <!-- Main Slider Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-home"></i>Inicio</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-plus-square"></i>Nuevos Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('ropa')}}"><i class="fa fa-tshirt"></i>Ropa</a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets & Accessorios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Electronica</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-female"></i>Maquillaje y Belleza</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                    <!--Contendio-->
                    

                        @yield('contenido')
                    </div>
                    <!--end contenido-->
                </div>
            </div>
        </div>
        <!-- Main Slider End -->  
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->          
        
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Productos nuevos</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Evaporisador</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/imagen40.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>220</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Funda de tableta</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/imagen41.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                   
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Reloj</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/imagen43.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>149</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Termometro</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/imagen45.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                   
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>129</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#">Termometro</a>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-10.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>$</span>99</h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Product End -->
        
    
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->  
  <!-- Back to Top -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="plantilla/lib/easing/easing.min.js"></script>
        <script src="plantilla/lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="plantilla/js/main.js"></script>
    </body>
</html>
