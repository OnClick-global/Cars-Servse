@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('New Car')}}
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
                <a   class="text-primary" >{{App\Helpers\Helper::translate('New Service')}}</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('store service')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="card-body col-6">
                        <div class="form-group">
                            <label>{{App\Helpers\Helper::translate('name in arabic')}}<span
                                    class="text-danger">*</span></label>
                            <input name="name_ar" class="form-control" type="text"
                                   placeholder="{{App\Helpers\Helper::translate('please Enter Name In Arabic')}}"/>
                        </div>

                    </div>
                    <div class="card-body col-6">
                        <div class="form-group">
                            <label>{{App\Helpers\Helper::translate('name in English')}}<span
                                    class="text-danger">*</span></label>
                            <input name="name_en" class="form-control" type="text"
                                   placeholder="{{App\Helpers\Helper::translate('please Enter Name In English')}}"/>
                        </div>

                    </div>
                    <div class="card-body col-6">
                        <div class="form-group mb-1">
                            <label for="exampleTextarea">{{App\Helpers\Helper::translate('Description In Arabic')}}
                                <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="exampleTextarea" name="des_ar" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="card-body col-6">
                        <div class="form-group mb-1">
                            <label for="exampleTextarea">{{App\Helpers\Helper::translate('Description In English')}}
                                <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="exampleTextarea" name="des_en" rows="3"></textarea>
                        </div>
                    </div>


                </div>


                <div class="card-footer text-center">
                    <button type="Submit"
                            class="btn btn-primary btn-default ">{{App\Helpers\Helper::translate('Save')}}</button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')
    <script src="assets/js/pages/crud/file-upload/dropzonejs.js"></script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>

@endsection

