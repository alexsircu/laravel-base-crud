@extends('layouts.main')

@section('content')
    <div class="container">
      <h1>Modifica campo</h1>
       @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      <form action="{{ route('beers.update', $beer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="brand">Marca</label>
          <input type="text" class="form-control" id="brand" name="brand" placeholder="Inserisci il nome della birra" value="{{ $beer->brand }}">
        </div>
        <div class="form-group">
          <label for="price">Prezzo</label>
          <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo della birra" value="{{ $beer->price }}">
        </div>
        <div class="form-group">
          <label for="alcohol_content">Gradazione alcolica</label>
          <input type="text" class="form-control" id="alcohol_content" name="alcohol_content" placeholder="Inserisci la gradazione alcolica" value="{{ $beer->alcohol_content }}">
        </div>
        <div class="form-group">
          <label for="nation">Nazione di origine</label>
          <input type="text" class="form-control" id="nation" name="nation" placeholder="Inserisci la nazione di origine" value="{{ $beer->nation }}">
        </div>
        <div class="form-group">
          <label for="description">Descrizione</label>
          <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Inserisci la descrizione della birra">{{ $beer->description }}</textarea>
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary">Modifica</button>
        <a href="{{ route('beers.index') }}" class="btn btn-primary">Indietro</a>
      </form>
    </div>
@endsection