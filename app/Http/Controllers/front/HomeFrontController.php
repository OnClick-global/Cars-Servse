<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Client;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Tenso;
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
        $data = Car::findorfail($id);
        $data->get();
        return view('front.car', compact('data'));
    }

    public function service($id)
    {
//        return $id;
        $data = Service::findorfail($id);
        return view('front.service', compact('data'));
    }

    public function tenso()
    {
//        return $id;
        $data = Tenso::first();

        return view('front.tenso', compact('data'));
    }

    public function change_lang(Request $request, $lang)
    {
        if (session()->has('lang')) {
            session()->forget('lang');
        }
        session()->put('lang', $lang);
        App::setLocale($lang);
        return back();
    }
}
