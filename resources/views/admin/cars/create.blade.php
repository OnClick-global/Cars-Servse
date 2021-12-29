@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('New Car')}}
@endsection
@section('header')

@endsection
@section('content')
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5"></h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{route('home')}}"
                               class="text-muted">{{App\Helpers\Helper::translate('dashboard')}}</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
        </div>
    </div>


    <div class="card card-custom">
        <!--begin::Form-->
        <form method="post" action="{{route('store car')}}" enctype="multipart/form-data">
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

                <div class="card-body col-12">
                    <div class="form-group ">
                        <div class="dropzone dropzone-default dropzone-primary" id="kt_dropzone_car">
                            <div class="dropzone-msg dz-message needsclick">
                                <h3 class="dropzone-msg-title">Drop files here or click to upload.</h3>
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
        <!--end::Form-->
    </div>
@endsection
@section('script')
    <script src="assets/js/pages/crud/file-upload/dropzonejs.js"></script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script type="text/javascript">
        $('#kt_dropzone_car').dropzone({
            paramName: "dzfile", // The name that will be used to transfer the file
            //autoProcessQueue: false,
            maxFilesize: 5, // MB
            clickable: true,
            addRemoveLinks: true,
            acceptedFiles: 'image/*',
            dictFallbackMessage: " المتصفح الخاص بكم لا يدعم خاصيه تعدد الصوره والسحب والافلات ",
            dictInvalidFileType: "لايمكنك رفع هذا النوع من الملفات ",
            dictCancelUpload: "الغاء الرفع ",
            dictCancelUploadConfirmation: " هل انت متاكد من الغاء رفع الملفات ؟ ",
            dictRemoveFile: "حذف الصوره",
            dictMaxFilesExceeded: "لايمكنك رفع عدد اكثر من هضا ",
            headers: {
                'X-CSRF-TOKEN':
                    "{{ csrf_token() }}"
            }
            ,
            url: "{{ route('cars.images') }}", // Set the url
            success:
                function (file, response) {
                    $('form').append('<input type="hidden" name="document[]" value="' + response.name + '">')

                }
            ,
            removedfile: function (file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="document[]"][value="' + name + '"]').remove()
            }
            ,
            // previewsContainer: "#dpz-btn-select-files", // Define the container to display the previews
            init: function () {
                @if(isset($event) && $event->document)
                var files =
                    {!! json_encode($event->document) !!}
                    for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                }
                @endif
            }
        });
    </script>
    <script>

    </script>
@endsection

