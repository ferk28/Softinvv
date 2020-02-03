@extends('layouts.main')

@section('title', 'Productos')

 
@section('content')

    @foreach ($errors as $product)
    <p>{{$product->type}}</p> 
    @endforeach

@endsection
