@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('New Client')}}
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
                <a   class="text-primary" >{{App\Helpers\Helper::translate('New Client')}}</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')

    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('store client')}}" enctype="multipart/form-data">
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
                    <div class="form-group">
                        <div class="image-input image-input-outline" id="kt_image_1">
                            <div class="image-input-wrapper" style="background-image: url()"></div>

                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="{{App\Helpers\Helper::translate('Client image')}}">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="images" accept=".png, .jpg, .jpeg"/>

                            </label>

                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel">
  <i class="ki ki-bold-close icon-xs text-muted"></i>
 </span>
                        </div>
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
    <script>
        var avatar1 = new KTImageInput('kt_image_1');
    </script>

@endsection

