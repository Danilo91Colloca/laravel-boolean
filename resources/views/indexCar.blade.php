<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cars Danilo</title>
    </head>
    <body>
      <div>-------------BOUNS RICERCA TRAMITE ID PASSATO NEL URL ------------------------</div>
       <span>id passato da URL: {{ $searchById }}</span>
       <br/>
       <br/>
      <span>Auto selzionata in base all'id dell'URL</span>
      <br/>
      <span>NB inserire il numero corrispondente all' id auto in bold </span>

      
      @foreach ($allCars as $car )
        @if ($car->carID == $searchById)
          <h1 style="text-transform: capitalize; color:red;">{{ $car->brand }} {{ $car->model }}</h1>
          <ul style="color:blue;">
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
            
        @endif
        
    @endforeach

       <div>------------da qui in poi tutte le macchine non filtrate da id------------</div>
        
       {{-- VISUALIZZAZIONE SEMPLICE --}}

      {{-- @foreach ($allCars as $car)
         {{ $car }} <br/><br/>
      @endforeach --}}
       @foreach ($allCars as $car )
         <h1 style="text-transform: capitalize">{{ $car->brand }} {{ $car->model }}</h1>
          <ul>
            <li style="font-weight: bolder">id auto: {{ $car->carID }}</li>
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
