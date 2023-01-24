<div class="modal fade" aria-hidden="true" aria-labelledby="mediumModalLabel" role="dialog" tabindex="-1" id="modal-update-{{$proyecto->cod_proyecto}}" style="margin-top: 50px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- modal blog -->
            <div class="modal-header">
                <h3 class="modal-title" id="mediumModalLabel">Editar Proyecto - {{ $proyecto->nombre_proyecto}}</h3>
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
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-description" aria-selected="true">Descripción</a>
                    <a class="nav-item nav-link" id="nav-features-tab" data-toggle="tab" href="#nav-features" role="tab" aria-controls="nav-features" aria-selected="false">Caracteristicas</a>
                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Docente</a>
                </div>
            </nav>
            {{Form::Open(array('action'=>array('\App\Http\Controllers\ProyectoController@update',$proyecto->cod_proyecto),'method'=>'GET'))}}
            {{Form::token()}}
            <div class="modal-body">
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-decription-tab">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" accept="image/png, .jpeg, .jpg" class="form-control-label">Imagen de portada</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="img_portada" name="img_portada" class="form-control-file" value="{{$proyecto->img_portada}}">
                                        <small class="form-text text-muted">Tamaño: 365x246</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" accept="image/png, .jpeg, .jpg" class="form-control-label">Imagen del curso</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="img_curso" name="img_curso" class="form-control-file" value="{{$proyecto->img_curso}}">
                                        <small class="form-text text-muted">Tamaño: 832x444</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Titulo del proyecto</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nombre_proyecto" name="nombre_proyecto" placeholder="Tituto del proyecto" class="form-control" value="{{$proyecto->nombre_proyecto}}" required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Contenido</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea id="descripcion" rows="5" name="descripcion" placeholder="Descripción" class="form-control ckeditor" value="{!$proyecto->descripcion!}" required></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Objetivo</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea id="text-area" rows="3" name="text-area" placeholder="Descripción" class="form-control ckeditor" value="{!$proyecto->objetivo!}" required></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Dirigido a</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea id="dirigido_a" rows="3" name="dirigido_a" placeholder="Descripción" class="form-control ckeditor" value="{!$proyecto->dirigido_a!}" required></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Certificación</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea id="certificado" rows="3" name="certificado" placeholder="Descripción" class="form-control ckeditor" value="{!$proyecto->certificado!}"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-features" role="tabpanel" aria-labelledby="nav-features-tab">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Inicio</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control" value="{{$proyecto->fecha_inicio}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Duración del curso</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="duracion" name="duracion" placeholder="Escribir número" class="form-control" value="{{$proyecto->duracion}}" required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Duración por clase</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="duracion_clase" name="duracion_clase" placeholder="Escribir número" class="form-control" value="{{$proyecto->duracion_clase}}">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Cupos</label>
                                    </div>
                                    <div class="col-12 col-md-4">
                                        <input type="text" id="cupos" name="cupos" placeholder="Cantidad de cupos" class="form-control" value="{{$proyecto->cupos}}">
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
                                                <input type="text" id="costo" name="costo" placeholder="Costo del curso" class="form-control" value="{{$proyecto->costo}}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="text" id="promocion" name="promocion" placeholder="Promocion, descuento o precio anterior" class="form-control" value="{{$proyecto->promocion}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Contenido</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea id="descr_docente" rows="5" name="descr_docente" placeholder="Descripción" class="form-control ckeditor" value="{!$proyecto->descr_docente!}" required></textarea>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" accept="image/png, .jpeg, .jpg" class="form-control-label">Imagen del docente</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="fotografia" name="fotografia" class="form-control-file" value="{{$proyecto->fotografia}}">
                                        <small class="form-text text-muted">Tamaño: 306x313</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Nombre del docente</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="nom_docente" name="nom_docente" placeholder="Nombre completo" class="form-control" value="{{$proyecto->nom_docente}}" required>
                                    </div>
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
