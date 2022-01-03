<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $Partners = Client::get();
        return view('admin.Client.index', compact('Partners'));
    }

    public function create()
    {
        return view('admin.Client.create');
    }

    public function store(ClientRequest $request)
    {
        $filename = Helper::uploadImage('Client', 'png', $request->images);
        $car = Client::Create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'images' => $filename,
        ]);

        return redirect(route('all client'))->with('message', Helper::translate('Client created successfully!'));
    }

    public function destroy($id)
    {
        $Partner = Client::findOrFail($id);
        $Partner->delete();
        return redirect(route('all client'))->with('message', Helper::translate('Client Deleted successfully!'));
    }

    public function edit(Request $request, $id)
    {
        $Partner = Client::findOrFail($id);
        $Partner->first();
        return view('admin.Client.edit', compact('Partner'));
    }

    public function update(ClientRequest $request, $id)
    {
        $partner = Client::where('id', $id);
        $filename = Helper::update('Client', $partner->first('images'), 'png', $request['images']);
        $partner->update([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'images' => $filename,
        ]);
        return redirect(route('all client'))->with('message', Helper::translate('Client updated successfully!'));
    }
}
