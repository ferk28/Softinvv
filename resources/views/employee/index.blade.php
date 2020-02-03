@extends('layouts.main')

@section('title', 'Empleados')

 
@section('content')

    @foreach ($errors as $employee)
    <p>{{$employee->name}}</p> 
    @endforeach

@endsection