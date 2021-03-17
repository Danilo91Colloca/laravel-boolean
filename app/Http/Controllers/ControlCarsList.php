<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class ControlCarsList extends Controller
{
    public function indexCar($id=null)
    {
      $allCars = Car::all();
      if(empty($id)) {
        $id = "l'id nella URL è empty";
          return view('indexCar',
          [
          'allCars' => $allCars,
          'searchById' => $id
          ]
        );
      } else {
          return view('indexCar',
          [
          'allCars' => $allCars,
          'searchById' => $id
          ]
        );
      }

      

      
    }
}
