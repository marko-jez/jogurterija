@extends('layouts.app')

@section('title', 'Novi post')

@section('content')

<div id="body">
  <div class="footer">
    <div class="contact">

      <h1>Novi recept</h1>

      <form action="{{route('recipes.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="title">Naziv:</label>
          <input type="text" name="title" placeholder="Upiši naziv recepta" value="{{ old('title') }}">
          @error('title')
            <p style="color: red">{{$message}}</p>    
          @enderror
          <label for="description">Opis:</label>
          <input type="text" name="description" placeholder="Upiši opis" value="{{ old('description') }}">
          @error('description')
            <p style="color: red">{{$message}}</p>    
          @enderror
          <label for="ingredients">Sastojci:</label>
          <input type="text" name="ingredients" placeholder="Upiši sastojke" value="{{ old('ingredients') }}">
          @error('ingredients')
            <p style="color: red">{{$message}}</p>    
          @enderror
          <label for="steps">Koraci za pripremu:</label>
          <textarea name="steps" placeholder="Koraci za pripremu">{{ old('steps') }}</textarea>
          @error('steps')
            <p style="color: red">{{$message}}</p>    
          @enderror 
          <input type="file" name="image" id="image">
          <input type="submit" id="submit" value="Objavi recept">
      </form>

    </div>
  </div>
</div>

@endsection
