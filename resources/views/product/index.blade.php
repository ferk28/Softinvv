@extends('layouts.main')
@section('title', 'Productos')
@section('content')

<script>
    $(document).ready(function() {
        $('#product').DataTable();
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
<table id="product" class="table table-striped table-bordered" style="width:100%">
<thead>
    <tr>
        <th>Serial</th>
        <th>Marca</th>
        <th>Model</th>
        <th>Status</th>
        <th>&nbsp;</th>
    </tr>
</thead>  
<tbody>
    @foreach($product as $products)
        <tr>
            <td>{{ $products->serialnumber }}</td>
            <td>{{ $products->trademark }}</td>
            <td>{{ $products->model }}</td>
            <td>{{ $products->status }}</td>
            <td width=15%>       
                <button class="btn btn-success" data-toggle="modal" data-target="#btn_edit"><i class="fa fa-eye"></i></button>
                <a class="btn btn-primary" href="{{ route('product.edit', $products) }}"><i class="fa fa-edit"></i></a>
                <button class="btn btn-danger" data-toggle="modal" data-target="#btn_delete"><i class="fa fa-trash-alt"></i></button>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
{{-- end table --}}


{{-- Start Modal Delete --}}
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
            <form action="{{ route('product.destroy',$products) }}" method="POST">
                <button type="button" class="btn btn-primary" data-dismiss="modal">No estoy seguro</button>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Si, eliminar</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  {{-- Start modal edit --}}
  <div class="modal fade" data-target-color="red" id="btn_edit" tabindex="-1" role="dialog" aria-labelledby="btn_delete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="">Ver registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="row justify-content-center">
                <div class="col-md-8 order-md-1">
                    <div class="mb-3">
                        <label for="serialnumber">Codigo Serial</label>
                    <input type="text" class="form-control " name="serialnumber" id="serialnumber" value="{{$products->serialnumber}}" readonly>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type">Tipo</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{$products->type}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="trademark">Marca</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" value="{{$products->trademark}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type">Sistema Operativo</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{$products->so}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="trademark">Modelo</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" value="{{$products->model}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="type">Estado</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{$products->status}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type">RAM</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{$products->ram}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="trademark">Dato</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" value="{{$products->dataram}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="type">HDD</label>
                            <input type="text" class="form-control" name="type" id="type" value="{{$products->hdd}}" readonly>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="trademark">Dato</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" value="{{$products->datahdd}}" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-6">
                            <label for="trademark">Descripcion</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" value="{{$products->description}}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
