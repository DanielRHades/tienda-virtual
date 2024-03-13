@extends('layouts.app')
@section('content')

    <h1 class="text-center m-5">Detalle del producto</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img class="img-fluid" src="{{ asset('images/miedito1.jpg') }}">
            </div>
            <div class="col-md-4">
                <h1>Doctor Sueño</h1>
                <p>Pelicula muy miedosa</p>
                <h3>$1.000.000</h3>
                <button type="button" class="btn btn-primary">Comprar</button>
            </div>
        </div>
    </div>
@endsection
