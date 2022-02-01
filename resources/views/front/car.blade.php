@extends('frontLayouts.app')
@section('content')
    <div class="slider-area">
        <div class="bend niceties preview-1 ">
            <div id="" class="container">
                @foreach($data->Images as $image)
                    <div class="" >
                        <img class="product-img" style=""  src="{{$image->image}}" alt="slider_1"/> <br><br>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div style="padding-top: 40px">
        <div class="shop-details section-padding">
            <div class="container">
                <div class="row">
                    <div class="single-list-shop">
                        <div class="col-md-6 col-sm-6">
                            <div class="single-product">
                                <div class="product-name">
                                    @if(app()->getLocale()=='ar')
                                        <h1>{{$data->name_ar}}</h1>
                                    @else
                                        <h1>{{$data->name_en}}</h1>
                                    @endif
                                </div>
                                <div class="price-rating">

                                </div>
                                <div class="product-text">
                                    @if(app()->getLocale()=='ar')
                                        <p>{{$data->des_ar}}</p>
                                    @else
                                        <p>{{$data->des_en}}</p>
                                    @endif
                                </div>
                                <div class="product-text">
                                    @if(app()->getLocale()=='ar')
                                        <p>{{$data->des_ar}}</p>
                                    @else
                                        <p>{{$data->des_en}}</p>
                                    @endif
                                </div>
                                <!-- cart plus minus start -->

                                <!-- shop details social end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
