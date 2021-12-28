@extends('adminLayouts.app')
@section('title')
    Test yajra
@endsection

@section('header')

@endsection


@section('content')
    {{\App\Models\Name::count()}}
    <div class="card">
        <div class="card-body">
            {!! $dataTable->table() !!}
        </div>
    </div>

@endsection



@section('script')
    {!! $dataTable->scripts() !!}
@endsection

