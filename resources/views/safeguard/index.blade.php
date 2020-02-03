@extends('layouts.main')

@section('title', 'Resguardos')

 
@section('content')

    @foreach ($errors as $safeguard)
    <p>{{$safeguard->name}}</p> 
    @endforeach

@endsection