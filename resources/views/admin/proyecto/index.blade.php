@extends('layouts.admin')
@section('contenido')

    <div class="col-md-12">
        <div class="overview-wrap row">
            <div class="col-md-8"><h1 class="title-1">Administrar Proyectos</h1></div>
            <div class="col-md-4" align="right"><a href="" data-target="#modal-create-proyecto" data-toggle="modal"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        Agregar Proyecto</button></a></div>
            </button>
        </div>
    </div>
    @include('admin.proyecto.search')
    <div class="row">
        @foreach($proyectos as $proyecto)
            <div class="col-md-3">
                <div class="card">
                    <tr class="card-img-top"><img src="{{asset('/img/proyecto/'.$proyecto->img_curso)}}" alt="{{$proyecto->nombre_proyecto}}"></tr>
                    <div class="card-body">
                        <h4 class="card-title">{{$proyecto->nombre_proyecto}}</h4>
                        <p class="card-text">
                            <?php
                                $cut = substr($proyecto->descripcion, 0, 250)
                                ?>
                            {!!$cut."..."!!}
                        </p><br>
                        <a href="" data-target="#modal-update-{{$proyecto->cod_proyecto}}" data-toggle="modal"><buton class="btn btn-primary">Editar</buton></a>
                        <a href="" data-target="#modal-delete-{{$proyecto->cod_proyecto}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </div>
                </div>
            </div>
            @include('admin.proyecto.modal')
            @include('admin.proyecto.edit')
        @endforeach
    </div>
    @include('admin.proyecto.create')
    {{$proyectos->render()}}

@stop
