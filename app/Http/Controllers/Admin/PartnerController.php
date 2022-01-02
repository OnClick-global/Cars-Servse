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
        $filename = Helper::uploadImage('partner', 'png',  $request->images);
        $car = Partner::Create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'images' => $filename,
        ]);

        return redirect(route('all partner'))->with('message', Helper::translate('Car created successfully!'));
    }
    public function destroy($id)
    {
        $Partner = Partner::findOrFail($id);
        $Partner->delete();
        return redirect(route('all partner'))->with('message', Helper::translate('Partner Deleted successfully!'));
    }

    public function edit(Request $request, $id)
    {
        $Partner = Partner::findOrFail($id);
        $Partner->first();
        return view('admin.Partner.edit', compact('Partner'));
    }

    public function updatePartner(PartnerRequest $request, $id)
    {
        $partner = Partner::where('id', $id);
        $filename = Helper::update('partner',$partner->first('images'),'png',$request['images']);
        $partner->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'images' => $filename,
        ]);
        return redirect(route('all partner'))->with('message', Helper::translate('Car updated successfully!'));
    }
}
