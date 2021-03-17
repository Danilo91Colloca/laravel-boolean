<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cars Danilo</title>
    </head>
    <body>
       @foreach ($allCars as $car )
         <h1 style="text-transform: capitalize">{{ $car->brand }} {{ $car->model }}</h1>
          <ul>
            <li>id auto: {{ $car->carID }}</li>
            <li>brand: {{ $car->brand }}</li>
            <li>modello: {{ $car->model }}</li>
            <li>prezzo: {{ $car->price }}€</li>
            <li>HP: {{ $car->power }}cv</li>
            <li>cilindrata: {{ $car->cubic_capacity }}cc</li>
            <li>colore: {{ $car->color }}</li>
            <li>immatricolazione: {{ $car->vehicle_register_date }}</li>
            <li>tipo cambio: {{ $car->gearbox }}</li>
            <li>tipo carburante: {{ $car->fuel }}</li>
          </ul>
       @endforeach

    </body>
</html>
