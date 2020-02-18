@extends('layouts.main')
@section('title', 'Resguardos')
@section('content')

<script>
    $(document).ready(function() {
        $('#safeguards').DataTable();
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
{{-- <a href="{{('pdf-download')}}" class="href">asd</a> --}}
<table id="safeguards" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Folio</th>
            <th>Status</th>
            <th>Empleado</th>
            <th>Serial</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($safeguard as $safeguard)
            <tr>
                <td>{{ $safeguard->id }}</td>
                <td>{{ $safeguard->status }}</td>
                <td>{{ $safeguard->employee->name }}</td>
                <td>{{ $safeguard->product->serialnumber }}</td>
                <td>{{ $safeguard->product->model }}</td>
                <td>{{ $safeguard->product->trademark }}</td>
                <td width=15%>
                    <a href="{{ route('safeguard.edit',['safeguard'=>$safeguard->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="" data-target="#btn-delete-{{$safeguard->id}}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                    <a href="{{url('safeguard/pdf-download/'.$safeguard->id)}}" class="btn btn-secondary"><i class="fa fa-file-alt"></i></a>
                </td>
            </tr>
            @include('safeguard.destroy')
        @endforeach
    </tbody>
</table>
{{-- end table --}}
@endsection
