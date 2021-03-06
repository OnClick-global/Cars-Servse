<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;


class SettingController extends Controller
{
    public function settings()
    {
        return view('admin.setting.setting');
    }

    public function store(Request $request)
    {
        $data = $this->validate(\request(),
            [  'name_ar' => 'required|max:255',
                'name_en' => 'required|max:255',
                'Adress_ar' => 'required|max:255',
                'Adress_en' => 'required|max:255',
                'phone1' => 'required|numeric',
                'phone2' => 'required|numeric',
                'Email' => 'required|email|max:255',
                'Whatsapp' => 'required|numeric',
                'facebook' => 'required|url|max:255',
                'twitter' => 'required|url|max:255',
                'instagram' => 'required|url|max:255',
                'snapchat' => 'required|url|max:255',
                'logo_header' => 'nullable|mimes:jpeg,jpg,png|max:10000',
                'logo_footer' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            ]);
        if($request->logo_header){
            $imageFields = Helper::uploadImage($request->logo_header, 'setting');
            $data['logo_header'] = $imageFields;
        }
        if($request->logo_footer){
            $imageFields = Helper::uploadImage($request->logo_footer, 'setting');
            $data['logo_footer'] = $imageFields;
        }
        $oldimageHeader = Setting::where('key', 'logo_header')->first()->value;
        $oldimageFooter = Setting::where('key', 'logo_footer')->first()->value;
        Setting::updateOrInsert(['key' => 'name_ar'], ['value' => $request['name_ar'],]);
        Setting::updateOrInsert(['key' => 'name_en'], ['value' => $request['name_en'],]);
        Setting::updateOrInsert(['key' => 'Adress_ar'], ['value' => $request['Adress_ar'],]);
        Setting::updateOrInsert(['key' => 'Adress_en'], ['value' => $request['Adress_en'],]);
        Setting::updateOrInsert(['key' => 'phone1'], ['value' => $request['phone1'],]);
        Setting::updateOrInsert(['key' => 'phone2'], ['value' => $request['phone2'],]);
        Setting::updateOrInsert(['key' => 'Email'], ['value' => $request['Email'],]);
        Setting::updateOrInsert(['key' => 'Whatsapp'], ['value' => $request['Whatsapp'],]);
        Setting::updateOrInsert(['key' => 'snapchat'], ['value' => $request['snapchat'],]);
        Setting::updateOrInsert(['key' => 'instagram'], ['value' => $request['instagram'],]);
        Setting::updateOrInsert(['key' => 'facebook'], ['value' => $request['facebook'],]);
        Setting::updateOrInsert(['key' => 'twitter'], ['value' => $request['twitter'],]);
        if($request->logo_header) {
            Setting::updateOrInsert(['key' => 'logo_header'], ['value' => $data['logo_header'],]);
        }
        if($request->logo_footer) {
            Setting::updateOrInsert(['key' => 'logo_footer'], ['value' => $data['logo_footer'],]);
        }
        return redirect(route('settings'))->with('success', Helper::translate('Settings Updated successfully!'));;
    }
}
