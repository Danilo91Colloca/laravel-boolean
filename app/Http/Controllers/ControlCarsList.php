<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlCarsList extends Controller
{
    public function indexCar()
    {
      return view('indexCar');
    }
}
