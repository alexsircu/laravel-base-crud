@extends('layouts.main')

@section('content')
  <div class="container p-3 my-3">
    <h1>INFORMAZIONI BIRRA</h1>
    <table class="table table-info table-striped table-bordered">
      @foreach ($beer->getAttributes() as $key => $value)
          <tr>
            <td><strong>{{ $key }}</strong></td>
            <td>{{ $value }}</td> 
          </tr>  
      @endforeach
    </table>
  </div>
@endsection