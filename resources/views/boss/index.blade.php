@extends('layouts.main')
@section('title', 'Jefes')
@section('content')

<script>
    $(document).ready(function() {
        $('#bosses').DataTable();
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

<table id="bosses" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Area</th>
            <th>N.Control</th>
            <th>Extension</th>
            <th>Status</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($boss as $boss)
            <tr>
                <td>{{ $boss->name }}</td>
                <td>{{ $boss->area->name }}</td>
                <td>{{ $boss->controlnum }}</td>
                <td>{{ $boss->extension }}</td>
                <td>{{ $boss->status }}</td>
                <td width=12%>
                    <a href="{{ route('boss.edit',['boss'=>$boss->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="" data-target="#btn-delete-{{$boss->id}}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                </td>
            </tr>
            @include('boss.destroy')
        @endforeach
    </tbody>
</table>
@endsection
