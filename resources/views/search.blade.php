@extends('layouts.app')

@section('title', 'Search')

@section('content')


@forelse ($recipes as $recipe)
  <a href="{{route('recipes.show', $recipe->id)}}">
    {{$recipe->title}} - {{$recipe->description}} <br>
  </a> 
@empty
    <p>Nema rezultata za: <strong>{{$query}}</strong></p>
@endforelse


@endsection