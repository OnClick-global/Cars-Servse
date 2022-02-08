<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Models\CarsImages;
use App\Models\ProductImages;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $data = Car::get();
        return view('admin.cars.index', compact('data'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(CarRequest $request)
    {

        $car = Car::Create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'des_ar' => $request->des_ar,
            'des_en' => $request->des_en,

        ]);
        foreach ($request->images as $image) {
            CarsImages::create([
                'image' => $image,
                'car_id' => $car->id
            ]);
        }
        return redirect(route('add new car'))->with('success', Helper::translate('Car created successfully!'));
    }

    public function carsImages(Request $request)
    {
        $file = $request->file('dzfile');
        $image =  Helper::uploadImage($file, 'cars');
        return response()->json([
            'name' => $image,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function view($id)
    {
         $car = Car::where('id', $id)->with('Images')->first();
        return view('admin.cars.view', compact('car'));
    }

    public function changeStatus(Request $request)
    {
        Car::where('id', $request->id)->update([
            'status' => $request->status
        ]);
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect(route('allCars'))->with('success', Helper::translate('Car Deleted successfully!'));
    }

    public function edit(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->first();
        return view('admin.cars.edit', compact('car'));
    }

    public function updateCar(CarRequest $request,$id){

        $car = Car::where('id',$id)->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'des_ar' => $request->des_ar,
            'des_en' => $request->des_en,
        ]);
        if ($request->images) {
            foreach ($request->images as $image) {
                CarsImages::create([
                    'image' => $image,
                    'car_id' => $id
                ]);
            }
        }
        return redirect(route('allCars'))->with('success', Helper::translate('Car updated successfully!'));
    }

    public function imageDelete($id)
    {
        $data = CarsImages::findOrFail($id);

        if (CarsImages::where('car_id', $data->car_id)->count() > 1) {

            $data->delete();
            return back()->with('success', 'تم حذف الصوره بنجاج');
        } else {
            return back()->with('danger', 'لا يمكن حذف , لابد من وجود علي الاقل صوره واحده');
        }

    }
}
