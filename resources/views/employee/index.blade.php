@extends('layouts.main')
@section('title', 'Empleados')
@section('content')

<script>
    $(document).ready(function() {
        $('#employees').DataTable();
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
<table id="employees" class="table table-striped table-bordered" style="width:100%">
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
        @foreach($employee as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->boss->name }}</td>
                <td>{{ $employee->controlnum }}</td>
                <td>{{ $employee->status }}</td>
                <td width=12%>
                    <a href="{{ route('employee.edit',['employee'=>$employee->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="" data-target="#btn-delete-{{$employee->id}}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                </td>
            </tr>
            @include('employee.destroy')
        @endforeach
    </tbody>
</table>
{{-- end table --}}
@endsection
