@extends('layouts.app')

@section('title', 'Naslovna')

@section('content')
	{{-- @include('partials.hero') --}}

	<div id="page">
		<div id="body" class="home">
			<div class="header">
				<img src="images/bg-home.jpg" alt="">
				<div>
					<a href="{{route('product')}}">Slatko hladni predah</a>
				</div>
			</div>
			<div class="body">
				<div>
					<div>
						<h1>ISTRAŽI OKUSE</h1>
						<h2>Najbolje ideje za jogurt na jednom mjestu</h2>
						<p>Pridruži se zajednici ljubitelja jogurta i podijeli svoj omiljeni recept. 
						Kombiniraj voće, žitarice, orašaste plodove ili slatke dodatke – mogućnosti su beskrajne.
						Zdrav doručak, brzi međuobrok ili desert bez grižnje savjesti.
						</p>
					</div>
					<img src="images/yogurt.jpg" alt="">
				</div>
			</div>
			<div class="footer">
				<div>
					<ul>
						<li>
							<a href="{{route('recipes.index')}}" class="product"></a>
							<h1>RECEPTI</h1>
						</li>
						<li>
							<a href="{{route('product')}}" class="flavor"></a>
							<h1>OKUSI</h1>
						</li>
						<li>
							<a href="{{route('about')}}" class="about"></a>
							<h1>NAŠA PRIČA</h1>
						</li>
						<li>
							<a href="{{route('contact')}}" class="contact"></a>
							<h1>NAŠA LOKACIJA</h1>
						</li>
					</ul>
				</div>
			</div>
		</div>

@endsection

