<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\TensoRequest;
use App\Models\Tenso;
use App\Models\TensoImage;
use Illuminate\Http\Request;

class TensoController extends Controller
{
    public function index()
    {
        $data = Tenso::get();
        return view('admin.tenso.index', compact('data'));
    }

    public function create()
    {
        return view('admin.tenso.create');
    }

    public function store(TensoRequest $request)
    {

        $tenso = Tenso::Create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'des_ar' => $request->name_ar,
            'des_en' => $request->name_en,

        ]);
        foreach ($request->images as $image) {
            TensoImage::create([
                'image' => $image,
                'tenso_id' => $tenso->id
            ]);
        }
        return redirect(route('add new tenso'))->with('success', Helper::translate('Car tenso successfully!'));
    }

    public function carsImages(Request $request)
    {
        $file = $request->file('dzfile');
        $image = Helper::uploadImage($file, 'tenso');
        return response()->json([
            'name' => $image,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    public function view($id)
    {
        $car = Tenso::where('id', $id)->with('Images')->first();
        return view('admin.tenso.view', compact('car'));
    }


    public function edit(Request $request, $id)
    {
        $car = Tenso::findOrFail($id);
        $car->first();
        return view('admin.tenso.edit', compact('car'));
    }

    public function updateCar(TensoRequest $request, $id)
    {
        $car = Tenso::where('id', $id)->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'des_ar' => $request->des_ar,
            'des_en' => $request->des_en,
        ]);
        if ($request->images) {
            foreach ($request->images as $image) {
                TensoImage::create([
                    'image' => $image,
                    'tenso_id' => $id
                ]);
            }
        }
        return redirect(route('alltenso'))->with('success', Helper::translate('tenso updated successfully!'));
    }

    public function imageDelete($id)
    {
        $data = TensoImage::findOrFail($id);

        if (TensoImage::where('tenso_id', $data->tenso_id)->count() > 1) {

            $data->delete();
            return back()->with('success', 'تم حذف الصوره بنجاج');
        } else {
            return back()->with('danger', 'لا يمكن حذف , لابد من وجود علي الاقل صوره واحده');
        }

    }
}
