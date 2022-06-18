@extends('template')
@section('contenido') 

<div class="col-md-6">
    <div class="header-slider normal-slider">
        <div class="header-slider-item">
            <img src="img/img11.jpg" alt="Slider Image" />
            <div class="header-slider-caption">
                <p>Compra Ahora Lo Mas Nuevo</p>
                <a class="btn" href="{{route('tablap')}}"><i class="fa fa-shopping-cart"></i>Comprar</a>
            </div>
        </div>
        <div class="header-slider-item">
            <img src="img/img10.jpg" alt="Slider Image" />
            <div class="header-slider-caption">
                <p>Eres un Emprendedor Date a Conocer Gratis</p>
                <a class="btn" href="{{route('alta_usuarios')}}"><i class=""></i>Registrate</a>
            </div>
        </div>
        <div class="header-slider-item">
            <img src="img/slider-3.jpg" alt="Slider Image" />
            <div class="header-slider-caption">
                <p>Apoya a los emprendedores o busca el procuto que necesitas</p>
                <a class="btn" href="{{route('tablap')}}"><i class="fa fa-shopping-cart"></i>Buscar</a>
            </div>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="header-img">
        <div class="img-item">
            <img src="img/imagen11.jpg" />
            <a class="img-text" href="{{route('tecnologia')}}">
                <p>Tecnologia y Computacion</p>
            </a>
        </div>
        <div class="img-item">
            <img src="img/imagen18.jpg" />
            <a class="img-text" href="{{route('accesorios')}}">
                <p>Gadgets</p>
            </a>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- Main Slider End -->      

<!-- Feature Start-->
<div class="feature">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-3 col-md-6 feature-col">
    <div class="feature-content">
        <i class="fab fa-cc-mastercard"></i>
        <h2>Entrega Segura</h2>
        <p>
            TU ENTREGA SIEMPRE ES SEGURA Y A TIEMPO
        </p>
    </div>
</div>
<div class="col-lg-3 col-md-6 feature-col">
    <div class="feature-content">
        <i class="fa fa-truck"></i>
        <h2>Entrega Delivery</h2>
        <p>
            TU PEDIDO HASTA LA PUERTA DE TU CASA
        </p>
    </div>
</div>
<div class="col-lg-3 col-md-6 feature-col">
    <div class="feature-content">
        <i class="fa fa-sync-alt"></i>
        <h2>90 Dias de Garantia</h2>
        <p>
            TODOS LOS PRODUCTOS CON 90 DIAS DE GARANTIA
        </p>
    </div>
</div>
<div class="col-lg-3 col-md-6 feature-col">
    <div class="feature-content">
        <i class="fa fa-comments"></i>
        <h2>24/7 Soporte</h2>
        <p>
            CONTACTANOS CUALQUIER PROBLEMA
        </p>
    </div>
</div>
</div>
</div>
</div>
<!-- Feature End-->      
<div class="category">
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
    <div class="category-item ch-400">
        <img src="img/category-3.jpg" />
        <a class="category-name" href="{{route('ropa')}}">
            <p>Todo tipo de ropa para dama y caballero</p>
        </a>
    </div>
</div>
<div class="col-md-3">
    <div class="category-item ch-250">
        <img src="img/category-4.jpg" />
        <a class="category-name" href="{{route('maquillaje')}}">
            <p>Maquillaje</p>
        </a>
    </div>
    <div class="category-item ch-150">
        <img src="img/category-5.jpg" />
        <a class="category-name" href="{{route('accesorios')}}">
            <p>Gadgets y Accessorios</p>
        </a>
    </div>
</div>
<div class="col-md-3">
    <div class="category-item ch-150">
        <img src="img/category-6.jpg" />
        <a class="category-name" href="">
            <p>Belleza y Tratamientos</p>
        </a>
    </div>
    <div class="category-item ch-250">
        <img src="img/category-7.jpg" />
        <a class="category-name" href="{{route('tecnologia')}}">
            <p>Tecnologia</p>
        </a>
    </div>
</div>
<div class="col-md-3">
    <div class="category-item ch-400">
        <img src="img/ropa2.jpg" />
        <a class="category-name" href="{{route('ropa')}}">
            <p>Ropa de Moda</p>
        </a>
    </div>
</div>
</div>
</div>
</div>

@stop