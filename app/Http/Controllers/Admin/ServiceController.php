<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::get();
        return view('admin.Service.index', compact('data'));
    }

    public function create()
    {
        return view('admin.Service.create');
    }

    public function store(Request $request)
    {
        $data = $this->validate(\request(),
            [
                'name_en' => 'required|max:255',
                'name_ar' => 'required|max:255',
                'des_ar' => 'required|max:255',
                'des_en' => 'required|max:255',
                'images' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            ]);
        if($request->images){
            $imageFields = Helper::uploadImage($request->images, 'client');
        }
        $car = Service::Create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'images' => $imageFields,
        ]);

        return redirect(route('all service'))->with('success', Helper::translate('Service created successfully!'));
    }

    public function edit(Request $request, $id)
    {
        $data = Service::findOrFail($id);
        $data->first();
        return view('admin.Service.edit', compact('data'));
    }
    public function view($id)
    {
        $data = Service::where('id', $id)->first();
        return view('admin.Service.view', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(\request(),
            [
                'name_en' => 'required|max:255',
                'name_ar' => 'required|max:255',
                'des_ar' => 'required|max:255',
                'des_en' => 'required|max:255',
                'images' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            ]);
        if($request->images){
            $imageFields = Helper::uploadImage($request->images, 'client');
            $data['images'] = $imageFields;
        }
        $client = Service::where('id', $id);
        $client->update($data);
        return redirect(route('all service'))->with('success', Helper::translate('Service updated successfully!'));
    }

    public function destroy($id)
    {
        $client = Service::findOrFail($id);
        $client->delete();
        return redirect(route('all service'))->with('success', Helper::translate('Service Deleted successfully!'));
    }
}
