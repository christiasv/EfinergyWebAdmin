<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$evento->cod_evento}}" style="margin-top: 50px;">
    {{Form::Open(array('action'=>array('\App\Http\Controllers\EventoController@destroy',$evento->cod_evento),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Evento</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Desea eliminar el evento?</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
    {{Form::Close()}}
</div>
