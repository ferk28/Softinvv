@extends('layouts.main')
@section('title', 'Nuevo')
@section('content')
{{-- send data --}}
<form method="post" action="{{route('boss.store')}}">
    {{-- input encrypted --}}
    @csrf
    {{-- meessage success --}}
    @if(session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Crear Jefe de Area</h4>
            <div class="mb-3">
                    <label for="name">Nombre del jefe de area</label>
                    <input type="text" class="form-control @if($errors->has('name')) border-danger @endif" name="name" id="name" value="{{old('name')}}" placeholder="Nombre jefe" autofocus>
                    <span class="text-danger"><small>{{$errors->first('name')}}</small></span>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="status">Estado</label>
                        <select class="custom-select d-block w-100 @if($errors->has('status')) border-danger @endif" name="status" id="status">
                            <option value="">Seleccionar...</option>
                            <option>Alta</option>
                            <option>Baja</option>
                        </select>
                        <span class="text-danger"><small>{{$errors->first('status')}}</small></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="controlnum">Numero de control</label>
                        <input type="number" class="form-control @if($errors->has('controlnum')) border-danger @endif" name="controlnum" id="controlnum" value="{{old('controlnum')}}" placeholder="5 caracteres">
                        <span class="text-danger"><small>{{$errors->first('controlnum')}}</small></span>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="extension">Numero de extension</label>
                        <input type="number" class="form-control @if($errors->has('extension')) border-danger @endif" name="extension" id="extension" value="{{old('extension')}}" placeholder="4 caracteres">
                        <span class="text-danger"><small>{{$errors->first('extension')}}</small></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label for="area_id">Area</label>
                        <select class="custom-select d-block w-100 @if($errors->has('area_id')) border-danger @endif" name="area_id" id="area_id">
                            <option value="">Seleccionar...</option>
                            @foreach ($area as $areas)
                                <option value="{{ $areas['id']}}">{{ $areas['name']}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger"><small>{{$errors->first('area_id')}}</small></span>
                    </div>
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
            </form>
        </div>
    </div>
</form>
@endsection
