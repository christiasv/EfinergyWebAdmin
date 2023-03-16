<div class="modal fade" aria-hidden="true" aria-labelledby="mediumModalLabel" role="dialog" tabindex="-1" id="modal-create-slide" style="margin-top: 50px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- modal slide -->
            <div class="modal-header">
                <h3 class="modal-title" id="mediumModalLabel">Agregar Slide</h3>
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
            {!!Form::open(array('url'=>'/admin/slide','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            <!--{{Form::Open(array('action'=>array('\App\Http\Controllers\SlideController@store'),'method'=>'POST'))}}-->
            {{Form::token()}}
            <div class="modal-body">
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" class="form-control-label">Slide</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="slider" name="slider" class="form-control-file" accept="image/png, .jpeg, .jpg">
                                    <small class="form-text text-muted">Tamaño: 8000x3821 maximo</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Titulo del slide</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="titulo" name="titulo" placeholder="Tituto del slide" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Subtitulo</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="subtitulo" name="subtitulo" placeholder="Subtitulo del slide" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Contenido</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="descripcion" rows="10" name="descripcion" placeholder="Descripción" class="form-control ckeditor" required></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Enlace</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="url" id="redireccion" name="redireccion" placeholder="Enlace de redirección" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer card-footer form-group">
                            <button type="submit" class="btn btn-primary btn-sm">
                                Agregar
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                Limpiar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
