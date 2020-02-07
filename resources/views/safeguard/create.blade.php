@extends('layouts.main')
@section('title', 'Nuevo')
@section('content')
{{-- send data --}}
<form method="post" action="{{route('safeguard.store')}}"> 
    {{-- input encrypted --}}
    @csrf
    {{-- message success --}}
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Crear resguardo</h4>
                <div class="row">
                    {{-- <div class="col-md-6 mb-3">
                        <label for="folio">Folio</label>
                        <input type="text" class="form-control  @if($errors->has('folio')) border-danger @endif" name="folio" id="folio" placeholder="Folio">
                        <span class="text-danger"><small>{{$errors->first('folio')}}</small></span>
                    </div> --}}
                    <div class="col-md-6 mb-3">
                        <label for="status">Estado</label>
                        <select class="custom-select d-block w-100  @if($errors->has('status')) border-danger @endif" name="status" id="status">
                            <option value="">Seleccionar...</option>
                            <option>Alta</option>
                            <option>Baja</option>
                        </select>
                        <span class="text-danger"><small>{{$errors->first('status')}}</small></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="employee_id">Empleado</label>
                        <select class="custom-select d-block w-100  @if($errors->has('employee_id')) border-danger @endif" name="employee_id" id="employee_id">
                            <option value="">Seleccionar...</option>
                            @foreach ($employees as $employee)
                        <option value="{{ $employee['id']}}">{{$employee['name']}}</option>                                
                            @endforeach
                        </select>
                        <span class="text-danger"><small>{{$errors->first('employee_id')}}</small></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="product_id">Producto</label>
                        <select class="custom-select d-block w-100  @if($errors->has('product_id')) border-danger @endif" name="product_id" id="product_id">
                            <option value="">Seleccionar...</option>
                            @foreach ($products as $product)
                        <option value="{{ $product['id']}}">{{ $product['serialnumber']}}\{{ $product['trademark']}}\{{ $product['model']}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger"><small>{{$errors->first('product_id')}}</small></span>
                    </div>
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </div>
    </div>
</form>
@endsection
