@extends('layouts.main')

@section('title', 'Jefes')

 
@section('content')

    @foreach ($errors as $boss)
    <p>{{$boss->name}}</p> 
    @endforeach

@endsection