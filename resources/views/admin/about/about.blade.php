@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('about')}}
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
                <a class="text-primary">{{App\Helpers\Helper::translate('about')}}</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')


    <div class="card">
        <div class="card-body">
            <form method="post" action="{{route('about update')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <span class="text-success offset-5 text-break h1" >{{App\Helpers\Helper::translate('Description In Arabic')}}</span>
                        <div class="form-group">
                                <textarea id="kt-tinymce-2" name="about_ar" class="tox-target">{{$data->about_ar}}</textarea>
                        </div>
                    </div>

                    <div class="col-12">
                        <span class="text-success offset-5 text-break h1" >{{App\Helpers\Helper::translate('Description In English')}}</span>
                        <div class="form-group">
                            <textarea id="kt-tinymce-3" name="about_en" class="tox-target">{{$data->about_en}}</textarea>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-4">
                                <button class="btn btn-primary"
                                        type="button">{{App\Helpers\Helper::translate('image')}}</button>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <div class="image-input image-input-outline" id="kt_image_1">
                                        <div class="image-input-wrapper"
                                             style="background-image: url({{$data->image}})"></div>

                                        <label
                                            class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                                            data-action="change" data-toggle="tooltip" title=""
                                            data-original-title="{{App\Helpers\Helper::translate('chose image')}}">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="image" accept=".png, .jpg, .jpeg"/>
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
    <script src="assets/plugins/custom/tinymce/tinymce.bundle.js"></script>

    <script>
        var KTTinymce = function () {
            var demos = function () {
                tinymce.init({
                    selector: '#kt-tinymce-3'
                });
            }
            return {
                init: function() {
                    demos();
                }
            };
        }();
        jQuery(document).ready(function() {
            KTTinymce.init();
        });
    </script>
    <script>
        var KTTone = function () {
            var one = function () {
                tinymce.init({
                    selector: '#kt-tinymce-2'
                });
            }
            return {

                init: function() {
                    one();
                }
            };
        }();
        jQuery(document).ready(function() {
            KTTone.init();
        });
    </script>

@endsection

