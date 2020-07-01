@extends('base')
@section('encabezado')
    Inicio
@endsection

@section('content')
@foreach ($productos as $producto)
<div class="card-deck">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $producto->nombre }}</h5>
            <p class="card-text"> <img src="{{ $producto->image }}" width="200"></p>
            <p class="card-text"> Precio: ${{ number_format($producto->precioUnitario,2) }} </p>
            <p>
                <a href="{{ route('detalles', $producto->producto_id) }}"> <button type="button" class="btn btn-primary" > Detalles </button></a>
            </p>
        
        </div>
    </div>
</div>



    
@endforeach
    
@endsection