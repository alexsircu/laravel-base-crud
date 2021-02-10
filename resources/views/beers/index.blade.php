<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    </head>
    <body>
      <div class="container">
        @foreach ($beers as $beer)
          <p>{{ $beer->id }}, <strong>{{ $beer->brand }}</strong>, {{ $beer->price }}, {{ $beer->alcohol_content }}, {{ $beer->nation }}, {{ $beer->description }}</p>
        @endforeach
      </div>
    </body>
</html>