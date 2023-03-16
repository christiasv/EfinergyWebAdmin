@extends('layouts.admin')
@section('contenido')

    <h1>Administrar Slides</h1>

    @include('admin.slide.search')

    <a href="" data-target="#modal-create-slide" data-toggle="modal"><button class="au-btn au-btn-icon au-btn--green au-btn--small btn btn-success">
            Agregar Slider</button></a>
    </button>


    <div class="row">
        @foreach($slider as $slide)
            <div class="col-md-3">
                <div class="card">
                    <tr class="card-img-top"><img src="{{asset('/img/slide/'.$slide->slider)}}" alt="{{$slide->titulo}}"></tr><!-- Falta hacer que aparezca la imagen -->
                    <div class="card-body">
                        <h4 class="card-title">{{$slide->titulo}}</h4>
                        <div class="row card-title">
                            <div class="col-md-12">{{$slide->subtitulo}}</div>
                        </div>
                        <p class="card-text">{!!$slide->descripcion!!}</p><br>
                        <p><a href="{!!$slide->redireccion!!}" target="_blank">Ver más</a></p>
                        <a href="" data-target="#modal-update-{{$slide->cod_slider}}" data-toggle="modal"><buton class="btn btn-primary">Editar</buton></a>
                        <a href="" data-target="#modal-delete-{{$slide->cod_slider}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a><!-- Error con el modal, sale debajo -->
                    </div>
                </div>
            </div>
            @include('admin.slide.modal')
            @include('admin.slide.edit')
        @endforeach
    </div>
    @include('admin.slide.create')
    {{$slider->render()}}

@stop
