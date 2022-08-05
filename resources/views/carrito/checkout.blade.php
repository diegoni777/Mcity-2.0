@extends('template')
@section('contenido')

<div class="container">
    <div class="row">
        <h2>Nuevo Carrito</h2>
       <div class="col-sm-12 bg-light">
           @if (count(Cart::getContent()))
            <table class="table table-striped">
                <thead>
                    
                    <th>NOMBRE</th>
                    <th>PRECIO</th>
                    <th>CANTIDAD</th>
                    <th>Opciones</th>
                    <input type="hidden" name="total" value=" {{$total = 0}} ">
                    <input type="hidden" name="subtotal" value=" {{$subtotal = 0}} ">
                </thead>
                <tbody>
                    @foreach (Cart::getContent() as $item)
                        <tr>
                            <input type="hidden" name="subtotal" value=" {{$subtotal= $subtotal + ($item->price * $item->quantity)}} ">
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>
                                <form action="{{route('cart.removeitem')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <button type="submit" class="btn btn-link btn-sm text-danger">x</button>
                                </form>
                            </td>
                        </tr>
                        <input type="hidden" name="total" value=" {{$total= $subtotal}} ">
                    @endforeach
                    <tr>
                        <td>
                        <td>Venta Total</td>
                        <td >$ {{$total}}</td>
                        <td><a href="{{route('paypal')}}">
                        <input type="button" class="btn btn-success" value="Terminar venta">
                        </a></td>
                        </td>
                    </tr>
                </tbody>
                
            </table>

            @else
                <p>Carrito vacio</p>
           @endif

       </div>
       
    </div>
</div>

<style>
    .border{
        border: 0;
    }
    .fondo{
        background: white;
    }
</style>
    
@endsection
