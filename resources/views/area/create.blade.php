@extends('layouts.main')
@section('title', 'Nuevo')
@section('content')

{{-- send data --}}
<form method="post" action="{{route('area.store')}}"> 
    @csrf
    {{-- input encrypted --}}
    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Crear Producto</h4>
                <div class="mb-3">
                    <label for="name">Descripcion</label>
                    <input type="text" class="form-control @if($errors->has('name')) border-danger @endif" name="name" id="name" value="{{old('name')}}" placeholder="Nombre" >
                    <span class="text-danger"><small>{{ $errors->first('name')}}</small></span>
                </div>
                <hr class="mb-4">
                <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </div>
    </div>
</form>
@endsection
