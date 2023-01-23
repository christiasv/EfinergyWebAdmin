@extends('layouts.admin')
@section('contenido')

    <h1>Administrar Noticias</h1>
    @include('admin.noticia.search')
    <a href="" data-target="#modal-create-noticia" data-toggle="modal"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
            Agregar Noticia</button></a>
    </button>
    <div class="row">
        @foreach($noticias as $noticia)
            <div class="col-md-12">
                <!-- DATA TABLE-->
                <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Descripción</th>
                            <th>Link</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$noticia->fecha}}</td>
                            <td>{!!$noticia->descripcion!!}</td>
                            <td><a href="{{$noticia->link}}" target="_blank">{{$noticia->link}}</a></td>
                            <td>
                                <a href="" data-target="#modal-update-{{$noticia->cod_noticias}}" data-toggle="modal"><buton class="btn btn-primary">Editar</buton></a>
                                <a href="" data-target="#modal-delete-{{$noticia->cod_noticias}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
            @include('admin.noticia.modal')
            @include('admin.noticia.edit')
        @endforeach
    </div>
    @include('admin.noticia.create')
    {{$noticias->render()}}

@stop
