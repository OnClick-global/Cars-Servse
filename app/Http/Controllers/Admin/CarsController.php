<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars=Car::where('status', '1')->get();
        return view('admin.cars.index', compact('cars'));
    }
    public function create()
    {
        return view('admin.cars.create');
    }
    public function store(Request $request ){

        return $request;
    }
    public function carsImages(Request $request ){
        $file = $request->file('dzfile');
        $filename = Helper::uploadImage('cars', 'jpg',$file);
    }
}
