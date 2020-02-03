@extends('layouts.main')

@section('title', 'Area')

 
@section('content')

    @foreach ($areas as $area)
    <p>{{$area->name}}</p> 
    @endforeach

@endsection
