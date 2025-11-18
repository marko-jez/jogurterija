@extends('layouts.app')

@section('title', 'Registracija korisnika')

@section('content')

<div id="body">
  <div class="footer">
    <div class="contact">

      <h1>Registriraj se</h1>

      <form action="{{route('register.store')}}" method="POST">
          @csrf
          <label for="name">Ime i prezime:</label>
          <input type="name" name="name" value="{{ old('name') }}" required>
          @error('name')
            <p style="color: red">{{$message}}</p>    
          @enderror
          <label for="title">Email:</label>
          <input type="email" name="email" value="{{ old('email') }}" required>
          @error('email')
            <p style="color: red">{{$message}}</p>    
          @enderror
          <label for="password">Lozinka:</label>
          <input type="password" name="password" required>
          @error('password')
            <p style="color: red">{{$message}}</p>    
          @enderror
          <label for="password_confirmation">Ponovi lozinku:</label>
          <input type="password" name="password_confirmation" required>
          @error('password_confirmation')
            <p style="color: red">{{$message}}</p>    
          @enderror
          <input type="submit" id="submit" value="Registracija" required>
      </form>

    </div>
  </div>
</div>

@endsection
