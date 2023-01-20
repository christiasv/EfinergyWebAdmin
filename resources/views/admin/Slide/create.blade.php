<div class="modal fade" aria-hidden="true" aria-labelledby="mediumModalLabel" role="dialog" tabindex="-1" id="modal-create-slide" style="margin-top: 50px;">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="mediumModalLabel">Agregar Slide</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>



            </div>



            <div class="modal-body">
                <div class="card-body card-block">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="file-input" accept="image/png, .jpeg, .jpg" class="form-control-label">Slide</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="slider" name="slider" class="form-control-file">
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
                                    <input type="url" id="link" name="link" placeholder="Enlace de redirección" class="form-control">
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
        </div>
    </div>
</div>
