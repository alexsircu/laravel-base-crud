@extends('layouts.main')

@section('content')
    <div class="container p-3 my-3">
        <h1>BIRRE ARTIGIANALI</h1> 
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif     
        <table class="table table-striped table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Brand</th>
              <th>Price</th>
              <th>Alcohol content</th>
              <th>Nation</th>
              <th>Created at</th>
              <th>Updated at</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($beers as $beer)
              <tr>
                <td>{{ $beer->id }}</td>
                <td>{{ $beer->brand }}</td>
                <td>{{ $beer->price }}</td>
                <td>{{ $beer->alcohol_content }}</td>
                <td>{{ $beer->nation }}</td>
                <td>{{ $beer->created_at }}</td>
                <td>{{ $beer->updated_at }}</td>
                <td>
                  <a href="{{ route('beers.show', $beer->id) }}" class="btn"><i class="fas fa-info"></i></a>
                  <a href="{{ route('beers.edit', $beer->id) }}" class="btn"><i class="far fa-edit"></i></a>
                  <form action="{{ route('beers.destroy', $beer) }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn"><i class="far fa-trash-alt"></i></button>
                  </form>
                </td>
              </tr>    
            @endforeach
          </tbody>
        </table>
      </div>
@endsection

@section('footer')
    <div class="container text-right">
      <a href="{{ route('beers.create') }}" class="btn btn-primary">Aggiungi una nuova birra</a>
    </div>
@endsection