<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $manufacturers = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacturers', '');
        if (request('manufacturer_id') == null) {
            $cars = Car::all();
        } else {
            $cars = Car::where('manufacturer_id', request('manufacturer_id'))->get();
        }

        return view('cars.index', compact('cars', 'manufacturers'));
    }

    public function create() {
        $manufacturers = Manufacturer::orderBy('name')->pluck('name','id')->prepend('All Manufacturers', '');
        return view('cars.create', compact('manufacturers'));
    }

    public function show($id) {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'model'=>'required',
            'year'=>'required|digits:4|integer|min:1885|max:'.(date('Y')),
            'salesperson_email'=>'required|email',
            'manufacturer_id'=>'required|exists:manufacturers,id'
        ]);
        
        dd($request->all());
    }
}