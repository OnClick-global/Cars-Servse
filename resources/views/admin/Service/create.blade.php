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
                            <input name="name_ar" value="{{old('name_ar')}}" class="form-control" type="text"
                                   placeholder="{{App\Helpers\Helper::translate('please Enter Name In Arabic')}}"/>
                        </div>

                    </div>
                    <div class="card-body col-6">
                        <div class="form-group">
                            <label>{{App\Helpers\Helper::translate('name in English')}}<span
                                    class="text-danger">*</span></label>
                            <input name="name_en" value="{{old('name_en')}}" class="form-control" type="text"
                                   placeholder="{{App\Helpers\Helper::translate('please Enter Name In English')}}"/>
                        </div>

                    </div>
                    <div class="card-body col-6">
                        <div class="form-group mb-1">
                            <label for="exampleTextarea">{{App\Helpers\Helper::translate('Description In Arabic')}}
                                <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="exampleTextarea" name="des_ar"  rows="3">{{old('des_ar')}}</textarea>
                        </div>
                    </div>
                    <div class="card-body col-6">
                        <div class="form-group mb-1">
                            <label for="exampleTextarea">{{App\Helpers\Helper::translate('Description In English')}}
                                <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="exampleTextarea" name="des_en" rows="3">{{old('des_en')}}</textarea>
                        </div>
                    </div>

                    <div class="card-body col-6">
                        <label>{{App\Helpers\Helper::translate('Service image')}}</label>
                        <div class="form-group">
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <div class="image-input-wrapper" style="background-image: url({{asset('/assets/media/users/blank.png')}})"></div>

                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="{{App\Helpers\Helper::translate('Service image')}}">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg"/>

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
    <script src="assets/js/pages/crud/file-upload/dropzonejs.js"></script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script type="text/javascript">
        $('#kt_dropzone_car').dropzone({
            paramName: "dzfile", // The name that will be used to transfer the file
            // autoProcessQueue: false,
            maxFilesize: 10, // MB
            clickable: true,
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            dictFallbackMessage: " ?????????????? ?????????? ?????? ???? ???????? ?????????? ???????? ???????????? ???????????? ???????????????? ",
            dictInvalidFileType: "?????????????? ?????? ?????? ?????????? ???? ?????????????? ",
            dictCancelUpload: "?????????? ?????????? ",
            dictCancelUploadConfirmation: " ???? ?????? ?????????? ???? ?????????? ?????? ?????????????? ?? ",
            dictRemoveFile: "?????? ????????????",
            dictMaxFilesExceeded: "?????????????? ?????? ?????? ???????? ???? ?????? ",
            headers: {
                'X-CSRF-TOKEN':
                    "{{ csrf_token() }}"
            }
            ,
            url: "{{ route('cars.images') }}", // Set the url
            success:
                function (file, response) {
                    $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
                },

        });
    </script>
    @if(Session::has('message'))
    <script>

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr.success("{{ Session::get('message') }}");
    </script>
@endif
@endsection

