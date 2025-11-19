@extends('layouts.app')

@section('title', 'Košarica')

@section('content')

<h1>Košarica</h1>

@forelse ($items as $item)
    <p>
        {{$item->name}}
        ({{$item->quantity}} x {{$item->price}}€)
    </p>
@empty
    
@endforelse

<p>Ukupno: {{$total}}</p>

@endsection