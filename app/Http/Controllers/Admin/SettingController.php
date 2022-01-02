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

    public function store(SettingRequest $request)
    {
        $oldimage = Setting::where('key', 'logo')->first()->value;
        $filename = Helper::update('settings', $oldimage,'png', $request['logo']);
        Setting::updateOrInsert(['key' => 'name_ar'], ['value' => $request['name_ar'],]);
        Setting::updateOrInsert(['key' => 'name_en'], ['value' => $request['name_en'],]);
        Setting::updateOrInsert(['key' => 'Adress_ar'], ['value' => $request['Adress_ar'],]);
        Setting::updateOrInsert(['key' => 'Adress_en'], ['value' => $request['Adress_en'],]);
        Setting::updateOrInsert(['key' => 'phone1'], ['value' => $request['phone1'],]);
        Setting::updateOrInsert(['key' => 'phone2'], ['value' => $request['phone2'],]);
        Setting::updateOrInsert(['key' => 'Email'], ['value' => $request['Email'],]);
        Setting::updateOrInsert(['key' => 'Whatsapp'], ['value' => $request['Whatsapp'],]);
        Setting::updateOrInsert(['key' => 'facebook'], ['value' => $request['facebook'],]);
        Setting::updateOrInsert(['key' => 'twitter'], ['value' => $request['twitter'],]);
        Setting::updateOrInsert(['key' => 'logo'], ['value' => $filename,]);
        return redirect(route('settings'))->with('message', Helper::translate('Settings Updated successfully!'));;
    }
}