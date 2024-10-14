<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $car = new Car;
        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->hp = $request->input('hp');
        $car->price = $request->input('price');
        $car->save();

        return redirect()->route('cars.index');
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->brand = $request->input('brand');
        $car->model = $request->input('model');
        $car->hp = $request->input('hp');
        $car->price = $request->input('price');
        $car->save();

        return redirect()->route('cars.index');
    }

    public function destroy($id)
    {
        $car= Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index');
    }

}