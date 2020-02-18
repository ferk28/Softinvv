@extends('layouts.main')
@section('title', 'Productos')
@section('content')

<script>
    $(document).ready(function() {
        $('#products').DataTable();
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
<table id="products" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>Serial</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Tipo</th>
        <th>Status</th>
        <th>&nbsp;</th>
    </tr>
</thead>
<tbody>
    @foreach($product as $product)
        <tr>
            <td>{{ $product->serialnumber }}</td>
            <td>{{ $product->trademark }}</td>
            <td>{{ $product->model }}</td>
            <td>{{ $product->type }}</td>
            <td>{{ $product->status }}</td>
            <td width=15%>
                <a href="" data-target="#btn_show-{{$product->id}}" data-toggle="modal" class="btn btn-success"><i class="fa fa-eye"></i></a>
                <a href="{{ route('product.edit',['product'=>$product->id]) }}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                <a href="" data-target="#btn-delete-{{$product->id}}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-trash-altz"></i></a>
            </td>
        </tr>
        @include('product.destroy')
        @include('product.show')
    @endforeach
</tbody>
</table>
{{-- end table --}}

@endsection
