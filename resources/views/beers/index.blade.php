<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    </head>
    <body>
      <div class="container p-3 my-3">
        <h1>BIRRE ARTIGIANALI</h1>      
        <table class="table table-stripped table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>ID</th>
              <th>Brand</th>
              <th>Price</th>
              <th>Alcohol content</th>
              <th>Nation</th>
              <th>Created at</th>
              <th>Updated at</th>
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
              </tr>    
            @endforeach
          </tbody>
        </table>
      </div>
    </body>
</html>