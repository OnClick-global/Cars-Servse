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
        $clients = Client::get();
        return view('admin.Client.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.Client.create');
    }

    public function store(ClientRequest $request)
    {
        if($request->images){
            $imageFields = Helper::uploadImage($request->images, 'client');
        }
        $car = Client::Create([
            'name_ar' => $request->name_ar,
            'name_en' => $request->name_en,
            'images' => $imageFields,

        ]);

        return redirect(route('all client'))->with('success', Helper::translate('Client created successfully!'));
    }

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();
        return redirect(route('all client'))->with('success', Helper::translate('Client Deleted successfully!'));
    }

    public function edit(Request $request, $id)
    {
        $client = Client::findOrFail($id);
        $client->first();
        return view('admin.Client.edit', compact('client'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->validate(\request(),
            [
                'name_en' => 'required|max:255',
                'name_ar' => 'required|max:255',
                'images' => 'nullable|mimes:jpeg,jpg,png|max:10000',
            ]);
        if($request->images){
            $imageFields = Helper::uploadImage($request->images, 'client');
            $data['images'] = $imageFields;
        }
        $client = Client::where('id', $id);
        $client->update($data);
        return redirect(route('all client'))->with('success', Helper::translate('Client updated successfully!'));
    }
}
