@extends('layouts.admin')
@section('contenido')

    <h1>Administrar Eventos</h1>
    @include('admin.evento.search')
    <a href="" data-target="#modal-create-evento" data-toggle="modal"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
            Agregar Evento</button></a>
    </button>
    <div class="row">
        @foreach($eventos as $evento)
            <div class="col-md-3">
                <div class="card">
                    <tr class="card-img-top"><img src="{{asset('/img/evento/'.$evento->img)}}" alt="{{$evento->titulo}}"></tr>
                    <div class="card-body">
                        <h4 class="card-title">{{$evento->titulo}}</h4>
                        <p class="card-title">{{$evento->fecha}}</p>
                        <div class="row card-title">
                            <div class="col-md-6">{{$evento->hora_inicio}}</div>
                            <div class="col-md-6">{{$evento->hora_fin}}</div>
                        </div>
                        <p class="card-text">{!!$evento->direccion!!}</p>
                        <p class="card-text"><a href="{{$evento->url}}" target="_blank">{{$evento->url}}</a></td></p><br>
                        <a href="" data-target="#modal-update-{{$evento->cod_evento}}" data-toggle="modal"><buton class="btn btn-primary">Editar</buton></a>
                        <a href="" data-target="#modal-delete-{{$evento->cod_evento}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a><!-- Error con el modal, sale debajo -->
                    </div>
                </div>
            </div>
            @include('admin.evento.modal')
            @include('admin.evento.edit')
        @endforeach
    </div>
    @include('admin.evento.create')
    {{$eventos->render()}}

@stop
