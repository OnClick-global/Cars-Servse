@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('All Partners')}}
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
                <a class="text-primary">{{App\Helpers\Helper::translate('All Partners')}}</a>
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
                <tr >
                    <th scope="col">#</th>
                    <th scope="col">{{App\Helpers\Helper::translate('name in arabic')}}</th>
                    <th scope="col">{{App\Helpers\Helper::translate('name in english')}}</th>
                    <th scope="col">{{App\Helpers\Helper::translate('Image')}}</th>
                    <th scope="col">{{App\Helpers\Helper::translate('Actions')}}</th>


                </tr>
                </thead>
                <tbody>
                @foreach($Partners as $Partner )
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{$Partner->name_ar}}</td>
                        <td>{{$Partner->name_en}}</td>
                        <td> <img style="width: 80px;" src="{{asset('storage/partner')}}/{{$Partner->images}}" ></td>
                        <td>
                            <a href="{{route('partner delete',$Partner->id)}}"
                               onclick="return confirm('هل انت متكد من حذف الخدمه')"><i
                                class="menu-icon flaticon-delete-1 text-danger"></i> </a> &ensp;
                            <a href="{{route('edit partner',$Partner->id)}}"><i class="menu-icon flaticon2-edit text-info"></i></a>

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
            toastr.success("{{ Session::get('message') }}");
        </script>
        <script>

        </script>
    @endif

@endsection

