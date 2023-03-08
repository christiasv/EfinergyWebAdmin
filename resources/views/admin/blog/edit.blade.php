<div class="modal fade" aria-hidden="true" aria-labelledby="mediumModalLabel" role="dialog" tabindex="-1" id="modal-update-{{$blog->cod_blog}}" style="margin-top: 50px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- modal blog -->
            <div class="modal-header">
                <h3 class="modal-title" id="mediumModalLabel">Editar Blog - {{ $blog->titular}}</h3>
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
            <!--{!!Form::model($blog,['method'=>'PATCH','route'=>['blog.update',$blog->cod_blog]])!!}-->
            {{Form::Open(array('action'=>array('\App\Http\Controllers\BlogController@update',$blog->cod_blog),'method'=>'GET'))}}
            {{Form::token()}}
            <div class="modal-body">
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" accept="image/png, .jpeg, .jpg" class="form-control-label">Imagen de portada</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="img_portada" name="img_portada" class="form-control-file" value="{{$blog->img_portada}}">
                                    <small class="form-text text-muted">Tamaño: 365x246</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" accept="image/png, .jpeg, .jpg" class="form-control-label">Imagenes del blog</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="img_blog" name="img_blog" multiple="" class="form-control-file" value="{{$blog->img_blog}}">
                                    <small class="form-text text-muted">Tamaño: 767x367</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Titulo del blog</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="titular" name="titular" placeholder="Tituto del blog" class="form-control" required value="{{$blog->titular}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Usuario</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="cod_user" name="cod_user" class="form-control" required value="{{$blog->nombre}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Fecha</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="datetime-local" id="fecha" name="fecha" class="form-control" required value="{{$blog->fecha}}">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Contenido</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="descripcion" rows="10" name="descripcion" placeholder="Descripción" class="form-control ckeditor" required value="{!!$blog->descripcion!!}"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer card-footer form-group">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Guardar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
