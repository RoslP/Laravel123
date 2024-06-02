<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index():void{
        $car=Car::find(1);
        $cars=Car::all(); # SELECT * FROM
        foreach($cars as $car){
           dump($car);
        }
        $is_used=Car::where('is_used',1)->get(); # Выводит использованные машины. Get выводит в виде коллекции.
        dump($is_used);
        $is_used_first=Car::where('is_used',1)->first(); # Выводит первый полученный элемент
        dump($is_used_first);
    }
}
