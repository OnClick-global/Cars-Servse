@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('View Car')}}
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
                <a href="{{route('allCars')}}"
                   class="text-muted">{{App\Helpers\Helper::translate('All Cars')}}</a>
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
            <h4 class="text-dark-75 font-weight-bolder ">{{App\Helpers\Helper::translate('name in arabic')}} :</h4> <p class="text-dark-75 ">{{$car->name_ar}} </p>
            <h4 class="text-dark-75 font-weight-bolder ">{{App\Helpers\Helper::translate('name in English')}} :</h4> <p class="text-dark-75 ">{{$car->name_en}} </p>
            <h4 class="text-dark-75 font-weight-bolder ">{{App\Helpers\Helper::translate('Description in arabic')}} :</h4> <p class="text-dark-75 ">{{$car->des_ar}} </p>
            <h4 class="text-dark-75 font-weight-bolder ">{{App\Helpers\Helper::translate('Description in English')}} :</h4> <p class="text-dark-75 ">{{$car->des_en}} </p>


            <br>
            <div class="carousel-item active">
                <h4 class="text-dark-75 font-weight-bolder ">{{App\Helpers\Helper::translate('Car images')}}</h4>
                @foreach($car->Images as $c)
                    <img class="p-2" style="height: 150px;" src="{{$c->image}}">
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('script')
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
                    $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
                }

        });
    </script>
    @if(Session::has('message'))
        <script>

            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-center",
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

