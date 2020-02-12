@extends('layouts.main')
@section('title', 'Nuevo')
@section('content')
{{-- references to controller@area update --}}
<form method="post" action="{{route('area.update',['area'=>$area])}}"> 
    {{-- meessage success --}}
    @if(session('message'))
        <div class="alert alert-success">{{session('message')}}</div>
    @endif
    {{-- to routh --}}
    @method('PUT')
    {{-- input encrypted --}}
    @csrf
    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Editar Area</h4>
            <div class="mb-3">
                <label for="name_area">Descripcion</label>
                <input type="text" class="form-control @if($errors->has('name_area')) border-danger @endif" name="name_area" id="name_area" value="{{($area->name_area)}}" placeholder="Nombre" autofocus>
                <span class="text-danger"><small>{{ $errors->first('name_area')}}</small></span>
            </div>
            <hr class="mb-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Editar</button>
            <a class="btn btn-secondary btn-block" href="javascript:history.back()">Volver atras</a>
        </div>
    </div>
</form>
@endsection
  