@extends('layouts.main')
@section('title', 'Nuevo')
@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
{{-- send data --}}
<form method="post" action="{{route('product.store')}}"> 
    @csrf 
    {{-- input encrypted --}}
    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Crear Producto</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="type">Tipo de producto</label>
                        <input type="text" class="form-control" name="type" id="type" placeholder="Producto">
                        <div class="invalid-feedback">
                            Valid product name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                            <label for="trademark">Marca del producto</label>
                            <input type="text" class="form-control" name="trademark" id="trademark" placeholder="Marca">
                        <div class="invalid-feedback">
                            Valid trademark name is required.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="so">Sistema Operativo</label>
                        <input type="text" class="form-control" name="so" id="so" placeholder="Sistema Operativo">
                        <div class="invalid-feedback">
                            Valid SO name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                            <label for="model">Modelo del producto</label>
                            <input type="text" class="form-control" name="model" id="model" placeholder="Modelo">
                        <div class="invalid-feedback">
                            Valid model name model is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="serialnumber">Codigo Serial</label>
                    <input type="text" class="form-control" name="serialnumber" id="serialnumber" placeholder="Serial">
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="quality">Calidad</label>
                        <select class="custom-select d-block w-100" name="quality" id="quality">
                            <option value="">Seleccionar...</option>
                            <option>Mala</option>
                            <option>Regular</option>
                            <option>Buena</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid quality.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="status">Estatus</label>
                            <select class="custom-select d-block w-100" name="status" id="status">
                                <option value="">Seleccionar...</option>
                                <option>Alta</option>
                                <option>Baja</option>
                            </select>
                            <div class="invalid-feedback">
                            Please provide a valid status.
                            </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="ram">Memoria RAM</label>
                        <input type="text" class="form-control" name="ram" id="ram" placeholder="RAM">
                        <div class="invalid-feedback">
                            RAM Memory is required.
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description">Descripcion <span class="text-muted">(Opcional)</span></label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Descripcion...">
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </div>
    </div>
</form>
@endsection
