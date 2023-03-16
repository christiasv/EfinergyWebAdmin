<div class="modal fade" aria-hidden="true" aria-labelledby="mediumModalLabel" role="dialog" tabindex="-1" id="modal-update-{{$slide->cod_slider}}" style="margin-top: 50px;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- modal blog -->
            <div class="modal-header">
                <h3 class="modal-title" id="mediumModalLabel">Editar Slide - {{ $slide->titulo}}</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <!--{!!Form::model($slide,['method'=>'PATCH','route'=>['slide.update',$slide->cod_slider]])!!}-->
            {{Form::Open(array('action'=>array('\App\Http\Controllers\SlideController@update',$slide->cod_slider),'method'=>'PATH'))}}
            {{Form::token()}}
            <div class="modal-body">
                <div class="card-body card-block">
                    <form action="{{ route('slide.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="tab-content" id="nav-tabContent">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class="form-control-label">Slide</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="slider" name="slider" class="form-control-file">
                                    <small class="form-text text-muted">Tamaño: 8000x3821</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Titulo del slide</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="titulo" name="titulo" placeholder="Tituto del slide" class="form-control" required value="{{$slide->titulo}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Subtitulo</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="subtitulo" name="subtitulo" class="form-control" required value="{{$slide->subtitulo}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Contenido</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="descripcion" rows="10" name="descripcion" placeholder="Descripción" class="form-control ckeditor" required >{!!$slide->descripcion!!}</textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Enlace</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="url" id="link" name="link" class="form-control" value="{{$slide->redireccion}}">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer card-footer form-group">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
