@extends('layouts.admin')
@section('contenido')

    <h1>Administrar Blogs</h1>
    @include('admin.blog.search')
    <a href="" data-target="#modal-create-blog" data-toggle="modal"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
            Agregar Blog</button></a>
    </button>
    <div class="row">
        @foreach($blogs as $blog)
            <div class="col-md-3">
                <div class="card">
                    <tr class="card-img-top"><img src="{{asset('/img/blog/'.$blog->img_portada)}}" alt="{{$blog->titular}}"></tr>
                    <div class="card-body">
                        <h4 class="card-title">{{$blog->titular}}</h4>
                        <div class="row card-title">
                            <div class="col-md-6">{{$blog->nombre}}</div>
                            <div class="col-md-6">{{$blog->updated_at}}</div>
                        </div>
                        <p class="card-text">{!!$blog->descripcion!!}</p><br>
                        <a href="" data-target="#modal-update-{{$blog->cod_blog}}" data-toggle="modal"><buton class="btn btn-primary">Editar</buton></a>
                        <a href="" data-target="#modal-delete-{{$blog->cod_blog}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a><!-- Error con el modal, sale debajo -->
                    </div>
                </div>
            </div>
            @include('admin.blog.modal')
            @include('admin.blog.edit')
        @endforeach
    </div>
    @include('admin.blog.create')
    {{$blogs->render()}}

@stop
