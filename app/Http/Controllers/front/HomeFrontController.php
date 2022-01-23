<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Partner;

class HomeFrontController extends Controller
{
    public function home(){
        $partners=Partner::get();
        $clients=Client::get();
        return view('front.index',compact('clients','partners'));
    }

}
