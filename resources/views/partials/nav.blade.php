		<div id="header">
			<div>
				<a href="{{route('home')}}" class="logo"><img src="{{asset('images/jogurterija.png')}}" alt=""></a>
				<ul id="navigation">
					<li class="selected">
						<a href="{{route('home')}}">Početna</a>
					</li>
					<li class="menu">
						<a href="{{route('recipes.index')}}">Recepti</a>
						<ul class="secondary">
              				<li>
								@auth
									<a href="{{route('recipes.create')}}">Novi recept</a>
								@else
									<a href="{{route('login')}}">Novi recept</a>
								@endauth
							</li>
						</ul>
					</li>

					<li><a href="{{route('product')}}">Naša ponuda</a></li>
					<li><a href="{{route('about')}}">O nama</a></li>	
					<li><a href="{{route('contact')}}">Kontakt</a></li>

					<li class="user-nav">
						@auth
							<span class="user-greeting">
								Bok, <strong>{{ Auth::user()->name }}</strong>
							</span>
							<form action="{{ route('logout') }}" method="POST" class="logout-form">
								@csrf
								<button type="submit" class="logout-btn">Odjava</button>
							</form>
						@else
							<a href="{{ route('login') }}" class="login-btn">Prijava</a>
							@guest
									<a href="{{route('register')}}" class="login-btn">Registriraj se</a>
							@endguest
						@endauth
					</li>

					{{-- <li class="search-item">
						<form method="GET" action="{{route('search')}}">
							<input type="search" name="q" placeholder="Potraži recept">
							<button class="btn" type="submit">Pretraga</button>
						</form> 
					</li>--}}
							
				</ul>
			</div>
		</div>