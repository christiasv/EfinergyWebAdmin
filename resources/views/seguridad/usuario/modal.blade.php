<div class="modal fade" aria-hidden="true" aria-labelledby="mediumModalLabel" role="dialog" tabindex="-1" id="modal-delete-{{$usuario->id}}" style="margin-top: 50px;">
    {{Form::Open(array('action'=>array('\App\Http\Controllers\UsersController@destroy',$usuario->id),'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Slide</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Desea eliminar el slide?</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
    {{Form::Close()}}
</div>
