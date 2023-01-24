<div class="modal fade" aria-hidden="true" aria-labelledby="mediumModalLabel" role="dialog" tabindex="-1" id="modal-create-proyecto" style="margin-top: 50px; z-index: 99999;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- modal proyecto -->
            <div class="modal-header">
                <h3 class="modal-title" id="mediumModalLabel">Agregar Proyecto</h3>
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
            {!!Form::Open(array('url'=>'admin/proyecto','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
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
                                    <input type="file" id="img_portada" name="img_portada" class="form-control-file" accept="image/*">
                                    <small class="form-text text-muted">Tamaño: 365x246</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" accept="image/png, .jpeg, .jpg" class="form-control-label">Imagen del curso</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="img_curso" name="img_curso" class="form-control-file" accept="image/*">
                                    <small class="form-text text-muted">Tamaño: 832x444</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Titulo del proyecto</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nombre_proyecto" name="nombre_proyecto" placeholder="Tituto del proyecto" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class="form-control-label">Contenido</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="descripcion" rows="5" name="descripcion" placeholder="Descripción" class="form-control ckeditor" required></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class="form-control-label">Objetivo</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="objetivo" rows="3" name="objetivo" placeholder="Descripción" class="form-control ckeditor" required></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class="form-control-label">Dirigido a</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="dirigido_a" rows="3" name="dirigido_a" placeholder="Descripción" class="form-control ckeditor" required></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class="form-control-label">Certificación</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="certificado" rows="3" name="certificado" placeholder="Descripción" class="form-control ckeditor"></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Inicio</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Duración del curso</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="duracion" name="duracion" placeholder="Escribir número" class="form-control" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Duración por clase</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="duracion_clase" name="duracion_clase" placeholder="Escribir número" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Cupos</label>
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="text" id="cupos" name="cupos" placeholder="Cantidad de cupos" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Costo</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <span>S/</span>
                                        </div>
                                        <div class="col-md-11">
                                            <input type="text" id="costo" name="costo" placeholder="Costo del curso" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" id="promocion" name="promocion" placeholder="Promocion, descuento o precio anterior" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Contenido</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="descr_docente" rows="5" name="descr_docente" placeholder="Descripción" class="form-control ckeditor" required></textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" accept="image/png, .jpeg, .jpg" class="form-control-label">Imagen del docente</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="fotografia" name="fotografia" class="form-control-file" accept="image/*">
                                    <small class="form-text text-muted">Tamaño: 306x313</small>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Nombre del docente</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="nom_docente" name="nom_docente" placeholder="Nombre completo" class="form-control" required>
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
