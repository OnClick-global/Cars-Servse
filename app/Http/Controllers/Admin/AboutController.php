<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function abouts()
    {
        $data=About::first();
        return view('admin.about.about',compact('data'));

    }
    public function store(Request $request)
    {

        $data = $this->validate(\request(),
            [
                'about_ar' => 'required',
                'about_en' => 'required',
                'image' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            ]);
        if ($request->image)
        {
            $imageFields = Helper::uploadImage($request->image, 'about');
            $data['image'] = $imageFields;
        }
            $About=About::first();
           $About->update($data);
        return redirect(route('about'))->with('success', Helper::translate('Abouts Updated successfully!'));;
    }
}
