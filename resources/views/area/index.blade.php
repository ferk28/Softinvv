@extends('layouts.main')

@section('title', 'Area')

 
@section('content')

    {{-- meessage success --}}
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif

<table id="area" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
</table>

<script>
    $(document).ready(function() {
        $('#area').DataTable({
            "serverSide": true,
            "ajax": "{{ url('api/area')}}",
            "columns": [
            {data: 'id'},
            {data: 'name'},
            {data: 'btn'},
            ]
        });
    });
</script>

@endsection
