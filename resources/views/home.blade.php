@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('dashboard')}}
@endsection
@section('content')
    <div class="row">
        <div class="card col-md-2">
            <div class="card-body text-center">
                <span class="svg-icon svg-icon-3x svg-icon-success">
                    <i class="flaticon-truck icon-2x text-danger"></i>
                </span>
                <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{\App\Models\Car::count()}}</div>
                <a class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">{{App\Helpers\Helper::translate('Cars')}}</a>
            </div>
        </div>

        <div class="card col-md-2">
            <div class="card-body text-center">
                <span class="svg-icon svg-icon-3x svg-icon-success">
                    <i class="flaticon-security icon-2x text-info"></i>
                </span>
                <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{\App\Models\Client::count()}}</div>
                <a class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">{{App\Helpers\Helper::translate('Clients')}}</a>
            </div>
        </div>

        <div class="card col-md-2">
            <div class="card-body text-center">
                <span class="svg-icon svg-icon-3x svg-icon-success">
                    <i class="flaticon-customer icon-2x text-success"></i>
                </span>
                <div class="text-dark font-weight-bolder font-size-h2 mt-3">{{\App\Models\Partner::count()}}</div>
                <a class="text-muted text-hover-primary font-weight-bold font-size-lg mt-1">{{App\Helpers\Helper::translate('Partners')}}</a>
            </div>
        </div>
    </div>
@endsection
