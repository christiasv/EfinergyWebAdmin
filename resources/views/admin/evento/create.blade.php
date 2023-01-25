<div class="modal fade" aria-hidden="true" aria-labelledby="mediumModalLabel" role="dialog" tabindex="-1" id="modal-create-evento" style="margin-top: 50px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- modal evento -->
            <div class="modal-header">
                <h3 class="modal-title" id="mediumModalLabel">Agregar Evento</h3>
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
            {!!Form::open(array('url'=>'admin/evento','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
            <div class="modal-body">
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" accept="image/png, .jpeg, .jpg" class="form-control-label">Imagen de evento</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="img" name="img" class="form-control-file" accept="image/*">
                                    <small class="form-text text-muted">Tamaño: 365x246</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Titulo del evento</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="titulo" name="titulo" placeholder="Titulo del evento" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Fecha</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" id="fecha" name="fecha" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Hora de inicio y fin</label>
                                </div>
                                <div class="col-12 col-md-9 row">
                                    <div class="col-md-6"><input type="time" id="hora_inicio" name="hora_inicio" class="form-control" required></div>
                                    <div class="col-md-6"><input type="time" id="hora_fin" name="hora_fin" class="form-control" required></div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Dirección</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="direccion" name="direccion" placeholder="Dirección del evento" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Url</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="url" name="url" placeholder="Url del evento" class="form-control" required>
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
