@extends('layouts.main')
@section('title', 'Empleados')
@section('content')

<script>
    $(document).ready(function() {
        $('#employee').DataTable();
    });
</script>
{{-- meessage --}}
@if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif
@if(session('message-error'))
    <div class="alert alert-danger">{{session('message-error')}}</div>
@endif
{{-- end meessage --}}
{{-- start table --}}
<table id="employee" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>Nombre</th>
        <th>Jefe</th>
        <th>N.Control</th>
        <th>Status</th>
        <th>&nbsp;</th>
    </tr>
</thead>  
<tbody>
    @foreach($employee as $employees)
        <tr>
            <td>{{ $employees->name_employee }}</td>
            <td>{{ $employees->boss->name_boss }}</td>
            <td>{{ $employees->controlnum }}</td>
            <td>{{ $employees->status }}</td>
            <td width=12%>       
                <a class="btn btn-primary" href="{{ route('employee.edit', $employees) }}"><i class="fa fa-edit"></i></a>
                <button type="submit" class="btn btn-danger"  data-toggle="modal" data-target="#btn_delete"><i class="fa fa-trash-alt"></i></button>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
{{-- end table --}}

{{-- Start Modal --}}
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
            <form action="{{ route('employee.destroy',$employees) }}" method="POST">
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