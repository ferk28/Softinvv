@extends('layouts.main')
@section('title', 'Nuevo')
@section('content')

{{-- send data --}}
<form method="post" action="{{route('area.store')}}"> 
    {{-- meessage success --}}
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    {{-- input encrypted --}}
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Crear Area</h4>
            <div class="mb-3">
                <label for="name_area">Nombre del area</label>
                <input type="text" class="form-control @if($errors->has('name_area')) border-danger @endif" name="name_area" id="name_area" value="{{old('name_area')}}" placeholder="Nombre" autofocus>
                <span class="text-danger"><small>{{ $errors->first('name_area')}}</small></span>
            </div>
            <hr class="mb-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
        </div>
    </div>
</form>
@endsection
