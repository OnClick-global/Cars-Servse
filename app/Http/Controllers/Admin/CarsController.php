<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars=Car::get();
        return view('admin.cars.index', compact('cars'));
    }
    public function create()
    {
        return view('admin.cars.create');
    }
    public function store(CarRequest $request ){
        $car=Car::Create([
            'name_ar'=> $request->name_ar,
            'name_en'=> $request->name_en,
            'des_ar'=> $request->name_ar,
            'des_en'=> $request->name_en,
            'images'=> $request->images,
        ]);
        return redirect(route('add new car'))->with('message', Helper::translate('Car created successfully!'));
    }
    public function carsImages(Request $request ){
        $file = $request->file('dzfile');
        $filename = Helper::uploadImage('cars', 'jpg',$file);
        return response()->json([
            'name' => $filename,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
    public function changeStatus(Request $request)
    {
        Car::where('id', $request->id)->update([
            'status' => $request->status
        ]);
    }
}
