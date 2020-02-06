@extends('layouts.main')
@section('title', 'Nuevo')
@section('content')
{{-- send data --}}
<form method="post" action="{{route('product.store')}}"> 
    {{-- input encrypted --}}
    @csrf 
    {{-- meessage success --}}
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Crear Producto</h4>
            <div class="mb-3">
                <label for="serialnumber">Codigo Serial <span class="text-muted">(Obligatorio)</span></label>
                <input type="text" class="form-control @if($errors->has('serialnumber')) border-danger @endif" name="serialnumber" id="serialnumber" value="{{old('serialnumber')}}" placeholder="Serial">
                <span class="text-danger"><small>{{$errors->first('serialnumber')}}</small></span>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="type">Tipo de producto</label>
                    <input type="text" class="form-control @if($errors->has('type')) border-danger @endif" name="type" id="type" value="{{old('type')}}" placeholder="Tipo">
                    <span class="text-danger"><small>{{$errors->first('type')}}</small></span>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="trademark">Marca de producto</label>
                    <input type="text" class="form-control @if($errors->has('trademark')) border-danger @endif" name="trademark" id="trademark" value="{{old('trademark')}}" placeholder="Marca">
                    <span class="text-danger"><small>{{$errors->first('trademark')}}</small></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="so">Sistema Operativo</label>
                    <input type="text" class="form-control" name="so" id="so" value="{{old('so')}}" placeholder="Sistema Operativo">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="model">Modelo del producto</label>
                    <input type="text" class="form-control @if($errors->has('model')) border-danger @endif" name="model" id="model" value="{{old('model')}}" placeholder="Modelo">
                    <span class="text-danger"><small>{{$errors->first('model')}}</small></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="status">Estado</label>
                        <select class="custom-select d-block w-100 @if($errors->has('status')) border-danger @endif" name="status" id="status">
                            <option value="">Seleccionar...</option>
                            <option>Alta</option>
                            <option>Baja</option>
                        </select>
                    <span class="text-danger"><small>{{$errors->first('status')}}</small></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="ram">Memoria RAM</label>
                    <input type="number" class="form-control" name="ram" id="ram" value="{{old('ram')}}" placeholder="RAM">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="dataram">Dato RAM</label>
                    <select class="custom-select d-block w-100" name="dataram" id="dataram">
                        <option value="">Seleccionar...</option>
                        <option>KB</option>
                        <option>MB</option>
                        <option>GB</option>
                        <option>TB</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label for="hdd">Memoria disco duro</label>
                    <input type="number" class="form-control" name="hdd" id="hdd" value="{{old('hdd')}}" placeholder="Disco Duro">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="datahdd">Dato disco duro</label>
                    <select class="custom-select d-block w-100" name="datahdd" id="datahdd">
                        <option value="">Seleccionar...</option>
                        <option>KB</option>
                        <option>MB</option>
                        <option>GB</option>
                        <option>TB</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label for="description">Descripcion <span class="text-muted">(Opcional)</span></label>
                <input type="text" class="form-control" name="description" id="description" value="{{old('description')}}" placeholder="Descripcion...">
            </div>
            <hr class="mb-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </div>
    </div>
</form>
@endsection
