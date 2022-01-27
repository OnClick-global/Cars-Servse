<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Client;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class HomeFrontController extends Controller
{
    public function home()
    {
        $partners = Partner::get();
        $clients = Client::get();
        return view('front.index', compact('clients', 'partners'));
    }
    public function car($id)
    {
//        return $id;
        $data=Car::findorfail($id);
        $data->get();
        return view('front.car', compact('data'));
    }
    public function tenso()
    {
//        return $id;
        $data=Car::first();

        return view('front.tenso', compact('data'));
    }

    public function change_lang(Request $request,$lang)
    {
        if (session()->has('lang')) {
            session()->forget('lang');
        }
        session()->put('lang', $lang);
        App::setLocale($lang);
        return back();
    }
}
