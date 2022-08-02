@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('View Service')}}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('home')}}"
                   class="text-muted">{{App\Helpers\Helper::translate('dashboard')}}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{url('services/all')}}"
                   class="text-muted">{{App\Helpers\Helper::translate('All Services')}}</a>
            </li>
            <li class="breadcrumb-item">
                <a class="text-primary">{{App\Helpers\Helper::translate('View Car')}}</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="text-dark-75 font-weight-bolder ">{{App\Helpers\Helper::translate('name in arabic')}} :</h4> <p class="text-dark-75 ">{{$data->name_ar}} </p>
            <h4 class="text-dark-75 font-weight-bolder ">{{App\Helpers\Helper::translate('name in English')}} :</h4> <p class="text-dark-75 ">{{$data->name_en}} </p>
            <h4 class="text-dark-75 font-weight-bolder ">{{App\Helpers\Helper::translate('Description in arabic')}} :</h4> <p class="text-dark-75 ">{{$data->des_ar}} </p>
            <h4 class="text-dark-75 font-weight-bolder ">{{App\Helpers\Helper::translate('Description in English')}} :</h4> <p class="text-dark-75 ">{{$data->des_en}} </p>


            <br>

        </div>
    </div>

@endsection
@section('script')
    <script src="assets/js/pages/crud/file-upload/dropzonejs.js"></script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
@endsection

