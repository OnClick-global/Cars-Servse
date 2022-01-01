@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('Settings')}}
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
                <a class="text-primary">{{App\Helpers\Helper::translate('Setting')}}</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')


    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('settings update')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary"
                                            type="button">{{App\Helpers\Helper::translate('Web Site Name in Arabic')}}</button>
                                </div>
                                <input type="text" name="name_ar"
                                       value="{{\App\Models\Setting::where('key','name_ar')->first()->value ?? ''}}"
                                       class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary"
                                            type="button">{{App\Helpers\Helper::translate('Web Site Name in English')}}</button>
                                </div>
                                <input type="text" name="name_en"
                                       value="{{\App\Models\Setting::where('key','name_en')->first()->value ?? ''}}"
                                       class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary"
                                            type="button">{{App\Helpers\Helper::translate('Adress in Arabic')}}</button>
                                </div>
                                <input type="text" name="Adress_ar"
                                       value="{{\App\Models\Setting::where('key','Adress_ar')->first()->value ?? ''}}"
                                       class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary"
                                            type="button">{{App\Helpers\Helper::translate('Adress in English')}}</button>
                                </div>
                                <input type="text" name="Adress_en"
                                       value="{{\App\Models\Setting::where('key','Adress_en')->first()->value ?? ''}}"
                                       class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary"
                                            type="button">{{App\Helpers\Helper::translate('Phone 1')}}</button>
                                </div>
                                <input type="number" name="phone1"
                                       value="{{\App\Models\Setting::where('key','phone1')->first()->value ?? ''}}"
                                       class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary"
                                            type="button">{{App\Helpers\Helper::translate('Phone 2')}}</button>
                                </div>
                                <input type="number" name="phone2"
                                       value="{{\App\Models\Setting::where('key','phone2')->first()->value ?? ''}}"
                                       class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary"
                                            type="button">{{App\Helpers\Helper::translate('Email')}}</button>
                                </div>
                                <input type="email" name="Email"
                                       value="{{\App\Models\Setting::where('key','Email')->first()->value ?? ''}}"
                                       class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary"
                                            type="button">{{App\Helpers\Helper::translate('Whatsapp')}}</button>
                                </div>
                                <input type="number" name="Whatsapp"
                                       value="{{\App\Models\Setting::where('key','Whatsapp')->first()->value ?? ''}}"
                                       class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary"
                                            type="button">{{App\Helpers\Helper::translate('facebook')}}</button>
                                </div>
                                <input type="url" name="facebook"
                                       value="{{\App\Models\Setting::where('key','facebook')->first()->value ?? ''}}"
                                       class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button class="btn btn-primary"
                                            type="button">{{App\Helpers\Helper::translate('twitter')}}</button>
                                </div>
                                <input type="url" name="twitter"
                                       value="{{\App\Models\Setting::where('key','twitter')->first()->value ?? ''}}"
                                       class="form-control" placeholder="Search for...">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4">
                                <button class="btn btn-primary"
                                        type="button">{{App\Helpers\Helper::translate('twitter')}}</button>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="image-input image-input-outline" id="kt_image_1">
                                        <div class="image-input-wrapper"
                                             style="background-image: url()"></div>

                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change" data-toggle="tooltip" title=""
                                            data-original-title="Change avatar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="logo" accept=".png, .jpg, .jpeg"/>
                                        </label>

                                        <span
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                         <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                    </div>
                                </div>
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

