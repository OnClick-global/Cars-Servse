<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerRequest;
use App\Models\Partner;
use App\Models\Setting;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    public function index()
    {
        $Partners = Partner::get();
        return view('admin.Partner.index', compact('Partners'));
    }

    public function create()
    {
        return view('admin.Partner.create');
    }

    public function store(PartnerRequest $request)
    {
        if($request->images){
            $imageFields = Helper::uploadImage($request->images, 'partner');
        }
        $car = Partner::Create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'images' => $imageFields,
        ]);

        return redirect(route('all partner'))->with('success', Helper::translate('Partner created successfully!'));
    }

    public function destroy($id)
    {
        $Partner = Partner::findOrFail($id);
        $Partner->delete();
        return redirect(route('all partner'))->with('success', Helper::translate('Partner Deleted successfully!'));
    }

    public function edit(Request $request, $id)
    {
        $Partner = Partner::findOrFail($id);
        $Partner->first();
        return view('admin.Partner.edit', compact('Partner'));
    }

    public function updatePartner(Request $request, $id)
    {
        $data = $this->validate(\request(),
            [
                'name_en' => 'required|max:255',
                'name_ar' => 'required|max:255',
                'images' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            ]);
        if($request->images){
            $imageFields = Helper::uploadImage($request->images, 'partner');
            $data['images'] = $imageFields;
        }
        $partner = Partner::where('id', $id);
        $partner->update($data);
        return redirect(route('all partner'))->with('success', Helper::translate('Partner updated successfully!'));
    }
}
