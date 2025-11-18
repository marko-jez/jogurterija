@extends('layouts.app')

@section('title', 'Blog')

@section('content')


	<div id="page">
		<div id="body">
			<div class="header">
				<div>
					<h1>Recepti</h1>
				</div>
			</div>
			<div class="blog">
				<div class="featured">
					<ul>
						@forelse ($allRecipes as $recipe)
							<li>
								<img src="{{ asset('storage/'. $recipe->image) }}" style="width:180px; height:180px; object-fit:cover;" alt="">
								<div>
									<h1>{{$recipe->title}}</h1> <br>
{{-- 									<span>Kreirano: {{$recipe->created_at}}</span>
 --}}									<p>{{$recipe->description}}</p>
									<a href="{{route('recipes.show', $recipe->id)}}" class="more">Otvori recept</a>
								</div>
							</li>
						@empty
							<p>Nema recepata u bazi</p>
						@endforelse
					</ul>
					<a href="blog.html" class="load">Load More</a>
				</div>
				<x-sidebar />
			</div>
		</div>
	</div>



@endsection
