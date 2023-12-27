<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', function() {
    return view('cars.index');
})->name('cars.index');

Route::get('/cars/create', function() {
    return view('cars.create');
})->name('cars.create');

Route::get('/cars/{id}', function($id) {
    $car = App\Models\Car::find($id);
    return view('cars.show', compact('car'));
})->name('cars.show');

Route::get('/manufacturers', function() {
    return view('manufacturers.index');
})->name('manufacturers.index');

Route::get('/manufacturers/create', function() {
    return view('manufacturers.create');
})->name('manufacturers.create');

Route::get('/manufacturers/{id}', function($id) {
    $manufacturer = App\Models\Manufacturer::find($id);
    return view('manufacturers.show', compact('manufacturer'));
})->name('manufacturers.show');