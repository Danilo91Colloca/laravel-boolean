<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class ControlCarsList extends Controller
{
    public function indexCar()
    {
      $allCars= Car::all();
      // dump($allCars);
      return view('indexCar',
        [
         'allCars' => $allCars
        ]
    
      );
    }
}
