@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('All Cars')}}
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
                <a class="text-primary">{{App\Helpers\Helper::translate('All Cars')}}</a>
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
                    <th scope="col">{{App\Helpers\Helper::translate('image')}}</th>
                    <th scope="col">{{App\Helpers\Helper::translate('Actions')}}</th>
                    <th scope="col">{{App\Helpers\Helper::translate('Status')}}</th>

                </tr>
                </thead>
                <tbody>
                @foreach($data as $car )
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{$car->name_ar}}</td>
                        <td><img src="{{$car->Images->first()->image}}" style="height: 80px;"></td>

                        <td>

                            <a href="{{route('car delete',$car->id)}}"
                               onclick="return confirm('هل انت متاكد من حذف الخدمه')"> <i class="menu-icon flaticon-delete-1 text-danger"></i> </a> &ensp;
                            <a href="{{route('car view',$car->id)}}"><i class="menu-icon flaticon-eye text-success"></i></a>&ensp;
                            <a href="{{route('edit car',$car->id)}}"><i class="menu-icon flaticon2-edit text-info"></i></a>

                        </td>
                        <td>
   <span class="switch switch-outline switch-icon switch-Primary">
    <label>
     <input type="checkbox" name="status" onchange="update_active(this)" value="{{$car->id}}"
            @if($car ->status =='1') checked="checked" @endif >
     <span></span>
    </label>
   </span>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
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

