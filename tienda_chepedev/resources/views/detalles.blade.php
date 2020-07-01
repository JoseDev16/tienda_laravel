@extends('base')
@section('encabezado')
    Detalle
@endsection

@section('content')

<div class="card">
    <img class="card-img-top" src="{{ $productod->image }}" >
    <div class="card-body">
        <h5 class="card-title">{{ $productod->nombre }}</h5>
        <p class="card-text">{{ $productod->descripcion }}</p>
    </div>
    <img class="card-img-bottom" src="" alt="">
</div>
    
@endsection