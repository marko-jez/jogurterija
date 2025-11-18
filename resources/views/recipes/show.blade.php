@extends('layouts.app')

@section('title', 'Single post')

@section('content')

	<div id="page">
		<div id="body">
			<div class="header">
				<div>
					<h1>Detalji recepta</h1>
				</div>
			</div>
			<div class="singlepost">
				<div class="featured">
					<img src="{{ asset('storage/'. $recipe->image) }}" style="width:280px; height:280px; object-fit:cover;" alt="">
					
					<h1>{{$recipe->title}}</h1>
					<span style="font-style: italic">
						Autor: {{ $recipe->user->name ?? 'Nepoznat autor' }}, 
						kreirano: {{ $recipe->created_at }}
					</span>
					<p>{{$recipe->description}}</p>
					<p><strong>Sastojci:</strong><br>{{$recipe->ingredients}}</p>
					<p><strong>Koraci za pripremu:</strong> <br>{{$recipe->steps}}</p>

					<div class="btn-group">
						<a href="{{route('recipes.index')}}" class="btn">Natrag</a>

						@auth
							@if (auth()->id() === $recipe->user_id)
								
							<a href="{{route('recipes.edit', $recipe->id)}}" class="btn">Uredi recept</a>

							<form action="{{route('recipes.destroy', $recipe->id)}}" method="POST" onsubmit="return confirm('Jeste li sigurni da želite obrisati recept?')" style="display: inline">
								@csrf
								@method('DELETE')
								<button type="submit" class="btn">Obriši</button>	
							</form>

							@endif	
						@endauth
						
					</div>
				</div>
				
				<x-sidebar />

			</div>
		</div>
	</div>

@endsection
