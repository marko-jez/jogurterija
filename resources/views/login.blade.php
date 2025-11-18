@extends('layouts.app')

@section('title', 'Prijava korisnika')

@section('content')

<div id="body">
  <div class="footer">
    <div class="contact">

      <h1>Prijavi se</h1>

      <form action="{{route('process')}}" method="POST">
          @csrf
          <label for="title">Email:</label>
          <input type="email" name="email" value="{{ old('email') }}">
          @error('email')
            <p style="color: red">{{$message}}</p>    
          @enderror
          <label for="password">Lozinka:</label>
          <input type="password" name="password">
          @error('password')
            <p style="color: red">{{$message}}</p>    
          @enderror
          <input type="submit" id="submit" value="Prijava">
      </form>

    </div>
  </div>
</div>

@endsection
