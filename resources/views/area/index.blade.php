@extends('layouts.main')

@section('title', 'Area')

 
@section('content')
    <script>
        $(document).ready(function() {
            $('#area').DataTable();
        });
    </script>
    {{-- meessage success --}}
    @if(session('message'))
        <div class="alert alert-danger">{{session('message')}}</div>
    @endif


<table id="area" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th scope="col-md-3">&nbsp;</th>
        </tr>
    </thead>  
    <tbody>
        @foreach($areas as $area)
            <tr>
                <td>{{ $area->name }}</td>
                <td>       
                    <a class="btn btn-primary m2" href="{{ route('area.edit', $area) }}">Editar</a>
                    <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#btn_delete">Eliminar</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


<!-- Modal -->
<div class="modal fade" data-target-color="red" id="btn_delete" tabindex="-1" role="dialog" aria-labelledby="btn_delete" aria-hidden="true">
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
            ¿Estás seguro que desea realizarla?
        </div>
        <div class="modal-footer">
            <form action="{{ route('area.destroy',$area->id) }}" method="POST">
                <button type="button" class="btn btn-primary" data-dismiss="modal">No estoy seguro</button>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Si, eliminar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection
