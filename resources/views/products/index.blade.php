@extends('layouts.app')

@section('title', 'Proizvodi')

@section('content')

<div id="page">
    <div id="body">
        <div class="header">
            <div>
                <h1>Proizvodi</h1>
            </div>
        </div>

        <div class="products-container">

            @if ($products->isEmpty())
                <p>Nema proizvoda.</p>
            @else

                <div class="products-grid">

                    @foreach ($products as $product)
                        <div class="product-card">

                            @if($product->image)
								<a href="{{route('products.show', $product->id)}}">
                                	<img src="{{ asset('images/' . $product->image) }}" class="product-image">
                            	</a>
							@else
                                <div class="product-image placeholder"></div>
                            @endif
							<a href="{{route('products.show', $product->id)}}">		
                            	<h3 class="product-name">{{ $product->name }}</h3>
							</a>
                            <p class="product-price">{{ $product->price }} €</p>

                            <a href="{{ route('cart.add', $product->id) }}" class="btn">
                                U košaricu
                            </a>

                        </div>
                    @endforeach

                </div>

            @endif

        </div>
    </div>
</div>

@endsection
