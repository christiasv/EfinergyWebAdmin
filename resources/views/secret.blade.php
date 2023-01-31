@extends('layouts.admin')
@section('contenido')

    <div class="container">
        <header class="d-flex flex wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                Pargina privada
            </a>
            <div class="col-md-3 text-end">
                <a href="{{route('logout')}}"><button type="button" class="btn btn-outline-primary me-2">Salir</button></a>
            </div>
        </header>
    </div>
    <article class="container">
        <h2>Tu seccion privada</h2>
    </article>

@stop
