@extends('layouts.main')

@section('content')
    <div class="container p-3 my-3">
        <h1>BIRRE ARTIGIANALI</h1>      
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
                <td><a href="{{ route('beers.show', $beer->id) }}" class="btn btn-outline-dark">Info</a></td>
              </tr>    
            @endforeach
          </tbody>
        </table>
      </div>
@endsection