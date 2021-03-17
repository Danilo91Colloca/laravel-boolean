<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cars Danilo</title>
    </head>
    <body>
       @foreach ($allCars as $car )
          {{ $car }}<br/><br/>
       @endforeach

    </body>
</html>
