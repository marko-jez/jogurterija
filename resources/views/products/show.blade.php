@extends('layouts.app')

@section('title', 'Proizvodi')

@section('content')

<p>Ime proizvoda{{$product->name}}</p> - <p>Cijena: {{$product->price}}</p> 

@endsection