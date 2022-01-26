@extends('adminLayouts.app')
@section('title')
    {{App\Helpers\Helper::translate('All Tenso')}}
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
                <a class="text-primary">{{App\Helpers\Helper::translate('All Tenso')}}</a>
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
                </tr>
                </thead>
                <tbody>
                @foreach($data as $tenso )
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{$tenso->name_ar}}</td>
                        <td><img src="{{$tenso->Images->first()->image}}" style="height: 80px;"></td>

                        <td>

                            <a href="{{route('edit tenso',$tenso->id)}}"><i class="menu-icon flaticon2-edit text-info"></i></a>

                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
@section('script')

@endsection

