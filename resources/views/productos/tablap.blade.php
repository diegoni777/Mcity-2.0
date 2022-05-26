@extends('template2')
@section('contenido')

     
        
       
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Productos</a></li>
                    <li class="breadcrumb-item active">Lista Productos</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
                            <nav class="nav justify-content-end">
                                @if(session('carrito'))
                                    <a class="nav-link" href="{{url('carrito')}}">
                                        El carrito contenido: {{count(session('carrito'))}}Articulos
                                    </a>
                                @else
                                    <a  class="nav-link" href="#">
                                        El carrito contenido: 0 articulos
                                    </a>
                                @endif
                            </nav>
                            
                            @if($message=Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <strong>{{$message}}</strong>
                                </div>
                            @endif
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-search">
                                                <input type="email" value="Search">
                                                <button><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">lista de productos</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Lo mas nuevo</a>
                                                        <a href="#" class="dropdown-item">Popular</a>
                                                        <a href="#" class="dropdown-item">Lo mas Vendido</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Rango de Precios</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">$0 to $50</a>
                                                        <a href="#" class="dropdown-item">$51 to $100</a>
                                                        <a href="#" class="dropdown-item">$101 to $150</a>
                                                        <a href="#" class="dropdown-item">$151 to $200</a>
                                                        <a href="#" class="dropdown-item">$201 to $250</a>
                                                        <a href="#" class="dropdown-item">$251 to $300</a>
                                                        <a href="#" class="dropdown-item">$301 to $350</a>
                                                        <a href="#" class="dropdown-item">$351 to $400</a>
                                                        <a href="#" class="dropdown-item">$401 to $450</a>
                                                        <a href="#" class="dropdown-item">$451 to $500</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                            @foreach($productos as $info)
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">{{$info->producto}}</a>
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
                                            <img src="{{ asset('archivos/'. $info->fotop)}}" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>{{$info->precio}}</h3>
                                        <a class="btn" href="{{url('agregar/'.$info->idp)}}"><i class="fa fa-shopping-cart"></i>Comprar</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        
                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>           
                    
                  
        
        @stop