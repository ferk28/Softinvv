@extends('layouts.main')
@section('title', 'Area')
@section('content')
<script>
    $(document).ready(function() {
        $('#areas').DataTable();
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
<table id="areas" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>&nbsp;</th>
        </tr>
    </thead>  
    <tbody>
        @foreach($area as $area)
            <tr>
                <td>{{ $area->name_area }}</td>
                <td width=12%>       
                    <a href="{{ route('area.edit',['area'=>$area->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                    <a href="" data-target="#btn-delete-{{$area->id}}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                </td>
            </tr>
            @include('area.destroy')
        @endforeach
    </tbody>
</table>
@endsection
