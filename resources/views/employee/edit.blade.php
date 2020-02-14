@extends('layouts.main')
@section('title', 'Nuevo')
@section('content')
{{-- send data --}}
<form method="post" action="{{route('employee.update',['employee'=>$employee])}}"> 
    {{-- meessage success --}}
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    @method('PUT')
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Editar Empleado</h4>
                <div class="mb-3">
                    <label for="name_employee">Nombre del Empleado</label>
                    <input type="text" class="form-control @if($errors->has('name_employee')) border-danger @endif" name="name_employee" id="name_employee" value="{{($employee->name_employee)}}" placeholder="Nombre empleado" autofocus>
                    <span class="text-danger"><small>{{$errors->first('name_employee')}}</small></span>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="status">Estatus</label>
                        <select class="custom-select d-block w-100 @if($errors->has('status')) border-danger @endif" name="status" id="status">
                            <option value="">Seleccionar...</option>
                            <option>Alta</option>
                            <option>Baja</option>
                        </select>
                        <span class="text-danger"><small>{{$errors->first('status')}}</small></span>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="controlnum">Numero de control</label>
                        <input type="number" class="form-control @if($errors->has('controlnum')) border-danger @endif" name="controlnum" id="controlnum" value="{{($employee->controlnum)}}" placeholder="5 caracteres">
                        <span class="text-danger"><small>{{$errors->first('controlnum')}}</small></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-2">
                        <label for="boss_id">Jefe en area</label>
                        <select class="custom-select d-block w-100 @if($errors->has('boss_id')) border-danger @endif" name="boss_id" id="boss_id">
                            <option value="">Seleccionar...</option>
                            @foreach ($bosses as $boss)
                                <option value="{{ $boss['id']}}">{{ $boss['name_boss']}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger"><small>{{$errors->first('boss_id')}}</small></span>                    
                    </div>
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                <a class="btn btn-secondary btn-block" href="javascript:history.back()">Volver atras</a>
            </form>
        </div>
    </div>    
</form>
@endsection
