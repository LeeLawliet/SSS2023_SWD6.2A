<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $Manufacturers = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        if (request('manufacturer_id') == null) {
            $cars = Car::all();
        } else {
            $cars = Car::where('manufacturer_id', request('manufacturer_id'))->get();
        }

        return view('cars.index', compact('cars', 'manufacturers'));
    }

    function create() {
        return view('cars.create');
    }

    function show($id) {
        $car = Car::find($id);
        return view('cars.show', compact('cars'));
    }
}