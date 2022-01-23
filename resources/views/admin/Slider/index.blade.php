@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('All Sliders')}}
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
                <a class="text-primary">{{App\Helpers\Helper::translate('All Sliders')}}</a>
            </li>
        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">{{App\Helpers\Helper::translate('Slider image')}}</th>
                    <th scope="col">{{App\Helpers\Helper::translate('Actions')}}</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $row )
                    <tr>
                        <td scope="row">
                            <img style="width: 70px;" src="{{$row->image}}">
                        </td>
                        <td>
                            <a href="{{route('Slider delete',$row->id)}}"
                               onclick="return confirm('هل انت متكد من حذف الخدمه')"><i
                                class="menu-icon flaticon-delete-1 text-danger"></i></a> &ensp;
                            <a href="{{route('edit Slider',$row->id)}}"><i class="menu-icon flaticon2-edit text-info"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
@section('script')
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
            toastr.warning("{{ Session::get('message') }}");
        </script>
        <script>

        </script>
    @endif

@endsection

