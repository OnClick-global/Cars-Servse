@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('All Cars')}}
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

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{App\Helpers\Helper::translate('name in arabic')}}</th>
            <th scope="col">{{App\Helpers\Helper::translate('name in english')}}</th>
            <th scope="col">{{App\Helpers\Helper::translate('Description in arabic')}}</th>
            <th scope="col">{{App\Helpers\Helper::translate('Description in english')}}</th>
            <th scope="col">{{App\Helpers\Helper::translate('Status')}}</th>

        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car )
            <tr>
                <th scope="row">{{ $loop->index+1 }}</th>
                <td>{{$car->name_ar}}</td>
                <td>{{$car->name_en}}</td>
                <td >{{ Str::limit($car->des_ar, 20, '  ...')}}</td>
                <td >{{ Str::limit($car->des_en, 20, '  ...')}}</td>



                <td>
   <span class="switch switch-outline switch-icon switch-Primary">
    <label>
     <input type="checkbox" name="status"  onchange="update_active(this)" value="{{$car->id}}" @if($car ->status =='1') checked="checked" @endif >
     <span></span>
    </label>
   </span>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>





@endsection
@section('script')
    <script type="text/javascript">
        function update_active(el) {
            if (el.checked)
                var status = '1';
            else
                var status = '0';
            $.post('{{ route('car status') }}', {
                _token: '{{ csrf_token() }}',
                id: el.value,
                status: status
            }, function (data) {
                if (status == 1) {
                    toastr.success("{{App\Helpers\Helper::translate('Car is Active')}}");
                } else {
                    toastr.error("{{App\Helpers\Helper::translate('Car is Deactivate')}}");
                }
            });
        }
    </script>
@endsection

