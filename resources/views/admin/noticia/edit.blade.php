<div class="modal fade" aria-hidden="true" aria-labelledby="mediumModalLabel" role="dialog" tabindex="-1" id="modal-update-{{$noticia->cod_noticias}}" style="margin-top: 50px;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <!-- modal blog -->
            <div class="modal-header">
                <h3 class="modal-title" id="mediumModalLabel">Editar Noticia</h3>
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
            <!--{!!Form::model($noticia,['method'=>'PATH','route'=>['blog.update',$noticia->cod_noticias]])!!}-->
            {{Form::Open(array('action'=>array('\App\Http\Controllers\NoticiaController@update',$noticia->cod_noticias),'method'=>'PATH'))}}
            {{Form::token()}}
            <div class="modal-body">
                <div class="card-body card-block">
                    <form action="{{ route('noticia.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="tab-content" id="nav-tabContent">
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Contenido</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea id="descripcion" rows="5" name="descripcion" placeholder="Descripción" class="form-control ckeditor"  required>{!!$noticia->descripcion!!}</textarea>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Link</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="link" name="link" placeholder="Dirección url" class="form-control" value="{{$noticia->link}}">
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
