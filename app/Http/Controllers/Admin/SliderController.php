<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $data = Slider::get();
        return view('admin.Slider.index', compact('data'));
    }

    public function create()
    {
        return view('admin.Slider.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate(\request(),
            [
                'image' => 'required',
            ]);
        if ($request->image) {
            $data['image'] = Helper::uploadImage($request->image, 'Slider');
        } else {
            unset($data['image']);
        }
        Slider::Create($data);
        return redirect(route('all Sliders'))->with('success', Helper::translate('Slider created successfully!'));
    }

    public function edit(Request $request, $id)
    {
        $data = Slider::findOrFail($id);
        $data->first();
        return view('admin.Slider.edit', compact('data'));
    }

    public function view($id)
    {
        $data = Slider::where('id', $id)->first();
        return view('admin.Slider.view', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(\request(),
            [
                'image' => 'required',
            ]);
        if ($request->image) {
            $data['image'] = Helper::uploadImage($request->image, 'Slider');
        } else {
            unset($data['image']);
        }
        $client = Slider::where('id', $id);
        $client->update($data);
        return redirect(route('all Sliders'))->with('success', Helper::translate('Slider updated successfully!'));
    }

    public function destroy($id)
    {
        $client = Slider::findOrFail($id);
        $client->delete();
        return redirect(route('all Sliders'))->with('success', Helper::translate('Slider Deleted successfully!'));
    }
}
