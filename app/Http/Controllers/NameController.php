<?php

namespace App\Http\Controllers;

use App\DataTables\nameDataTable;
use App\Models\Name;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class NameController extends Controller
{


    public function index(nameDataTable $dataTable)
    {
        return $dataTable->render('admin.name.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Name $name
     * @return \Illuminate\Http\Response
     */
    public function show(Name $name)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Name $name
     * @return \Illuminate\Http\Response
     */
    public function edit(Name $name)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Name $name
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Name $name)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Name $name
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $name = Name::findorfail($id);
        $name->delete();

        return response()->json(['message' => 'Success']);
    }
}
