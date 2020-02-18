{{-- Start Modal --}}
<div class="modal fade" data-target-color="red" id="btn-delete-{{$boss->id}}" tabindex="-1" role="dialog" aria-labelledby="btn_delete" aria-hidden="true">
    <form action="{{ route('boss.destroy',['boss'=>$boss->id]) }}" method="post">
        @method('DELETE')
        @csrf
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Mensaje de alerta...</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Al realizar esta acción no podrás recuperar estos datos.
                    ¿Estás seguro que desea eliminar {{$boss->name}} de la base de datos?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">No estoy seguro</button>
                    <button type="submit" class="btn btn-danger">Si, eliminar</button>
                </div>
            </div>
        </div>
    </form>
</div>
