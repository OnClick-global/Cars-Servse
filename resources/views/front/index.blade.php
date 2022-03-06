@extends('frontLayouts.app')
@section('content')
    <div class="slider-area">
        <div class="bend niceties preview-1">
            @php($sliders=\App\Models\Slider::all())
            <div id="nivoslider" class="slides">
                @foreach($sliders as $slider)
                    <img style="" src="{{$slider->image}}" alt="slider_1"/>
                @endforeach
            </div>
        </div>
    </div>
    <div id="aboutCS"  class="about-us-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- section title start -->
                    <div class="section-heading">
                        <h2>{{Helper::translate('About Cs')}}</h2>
                    </div>
                    <!-- section title end -->
                    <!-- about content start -->
                    @php($about=\App\Models\About::first())
                    <div class="about-us-info" @if(app()->getLocale() == 'ar') style="direction: rtl;" @else  @endif >
                        @if(App()->getLocale()=='ar')
                            <p>{!!$about->about_ar!!}</p>
                        @else
                            <p>{!!$about->about_en!!}</p>
                        @endif
                    </div>
                    <!-- about content end -->
                </div>
                <div class="col-md-6 hidden-xs">
                    <!-- about us img start -->
                    <div class="about-us-img">
                        <img src="{{$about->image}}" alt="">
                    </div>
                    <!-- about us img end -->
                </div>
            </div>
        </div>
    </div>
    <div id="tenso" class="testimonial-area section-padding">
        @php($tenso=\App\Models\Tenso::where('type','tenso')->with('Images')->first())
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section title start -->
                    <div class="section-heading text-center">
                        <h2>
                            @if(app()->getLocale() =='ar')
                                <span>{{$tenso->name_ar}}</span>
                            @else
                                <span>{{$tenso->name_en}}</span>
                            @endif

                        </h2>
                    </div>
                    <!-- section title end -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- testimonial slider start -->
                    <div class="testimonial-slider owl-preview-1">
                        <!-- single testimonial start -->
                        <div class="single-testimonial">
                            <!-- testimonil img -->
                            <div class="testimonial-img hidden-xs">
                                <div class="writer-img">
                                    <img style="height: 188px" src="{{$tenso->Images[0]->image}}" alt="">
                                </div>
                            </div>
                            <!-- testimonial content -->
                            <div class="testimonial-content">

                                <div class="test-spech">
                                    @if(app()->getLocale() =='ar')
                                        <p>{{$tenso->des_ar}}</p>

                                    @else
                                        <p>{{$tenso->des_en}}</p>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial slider end -->
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section title start -->
                    <div class="section-heading text-center">
                        <h2>{{App\Helpers\Helper::translate('ISUZU Cars')}}</h2>
                    </div>
                    <!-- section title end -->
                </div>
            </div>
            <div class="row">
                <!-- blog slider start -->
                <div class="blog-slider owl-preview-2">
                    @php($cars=\App\Models\Car::get())
                    @foreach($cars as $car)
                        <div class="col-md-12">
                            <!-- single blog start -->
                            <div class="single-blog">
                                <!-- blog img start -->
                                <div class="blog-img">
                                    <img style="height: 250px;" src="{{$car->Images[0]->image}}" alt="">
                                </div>
                                <!-- blog img end -->
                                <!-- blog content start -->
                                <div class="blog-info">
                                    <!-- post title -->
                                    <a href="{{route('carFrontView',$car->id)}}" class="blog-title">
                                        @if(app()->getLocale()=='ar')
                                            {{$car->name_ar}}
                                        @else
                                            {{$car->name_en}}
                                        @endif
                                    </a>
                                    <!-- post info -->
                                    <!-- post summary -->
                                    <p class="post-summary">
                                        @if(app()->getLocale()=='ar')
                                            {{$car->des_ar}}
                                        @else
                                            {{$car->des_en}}
                                        @endif
                                    </p>

                                </div>
                                <!-- blog content end -->
                            </div>
                            <!-- single blog start -->
                        </div>
                    @endforeach
                </div>
                <!-- blog slider end -->
            </div>
        </div>
    </div>
    <div id="tenso" class="testimonial-area section-padding">
        @php($isuzu=\App\Models\Tenso::where('type','isuzu')->with('Images')->first())
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section title start -->
                    <div class="section-heading text-center">
                        <h2>
                            @if(app()->getLocale() =='ar')
                                <span>{{$isuzu->name_ar}}</span>
                            @else
                                <span>{{$isuzu->name_en}}</span>
                            @endif

                        </h2>
                    </div>
                    <!-- section title end -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- testimonial slider start -->
                    <div class="testimonial-slider owl-preview-1">
                        <!-- single testimonial start -->
                        <div class="single-testimonial">
                            <!-- testimonil img -->
                            <div class="testimonial-img hidden-xs">
                                <div class="writer-img">
                                    <img style="height: 188px" src="{{$isuzu->Images[0]->image}}" alt="">
                                </div>
                            </div>
                            <!-- testimonial content -->
                            <div class="testimonial-content">

                                <div class="test-spech">
                                    @if(app()->getLocale() =='ar')
                                        <p>{{$isuzu->des_ar}}</p>

                                    @else
                                        <p>{{$isuzu->des_en}}</p>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- testimonial slider end -->
                </div>
            </div>
        </div>
    </div>
    <div id="Services" class="service-area section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section title start -->
                    <div class="section-heading light text-center no-margin">
                        <h2><span> {{App\Helpers\Helper::translate('Services')}}</span></h2>
                    </div>
                    <!-- section title end -->
                </div>
            </div>
            <div class="row">
                @php($Services=\App\Models\Service::where('type','services')->get())
                @foreach($Services as $Service)
                    <div class="col-md-4 col-sm-6">
                        <!-- single service start -->
                        <div class="single-service">
                            <div class="icon-title">
                                @if(app()->getLocale()=='ar')
                                    <h3>{{$Service->name_ar}}</h3>
                                @else
                                    <h3>{{$Service->name_en}}</h3>
                                @endif
                                <img class="serviceImg" src="{{$Service->image}}" alt="">
                            </div>
                            @if(app()->getLocale()=='ar')
                                <p>{{$Service->des_ar}}</p>
                            @else
                                <p>{{$Service->des_en}}</p>
                            @endif
                        </div>
                        <!-- single service end -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="Partners" class="team-member section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section title start -->
                    <div class="section-heading text-center">
                        <h2>{{App\Helpers\Helper::translate('Partners')}}</h2>
                    </div>
                    <!-- section title end -->
                </div>
            </div>
            <div class="row">
                <!-- single team start -->
                @foreach($partners as $partner)
                    <div class="col-sm-2">
                        <div class=" hover-style pull-left">
                            <div class="team-img">
                                <!-- team img start -->
                                <a href="#" class="main-img">
                                    <img src="{{$partner->images}}" alt="">
                                </a>
                                <div class="team-info">
                                    @if(app()->getLocale() == 'ar')
                                        <h3>{{$partner->name_en}}</h3>
                                    @else
                                        <h3>{{$partner->name_en}}</h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
            @endforeach
            <!-- single team end -->

            </div>
        </div>
    </div>
    <div id="Clients"  class="shop-area section-padding overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section title start -->
                    <div class="section-heading light text-center no-margin">
                        <h2>{{App\Helpers\Helper::translate('Clients')}} </h2>
                    </div>
                    <!-- section title end -->
                </div>
            </div>
            <div class="shop-tab-area">
                <!-- Shop tabs -->

                <!-- Shop Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                        <div class="row">
                            @foreach($clients as $client)
                                <div class="col-md-2 col-sm-6">
                                    <!-- single product start -->
                                    <div class="single-product hover-style text-center">
                                        <div class="product-img">
                                            <!-- product-img -->
                                            <img src="{{$client->images}}" alt="">
                                            <!-- product actions -->
                                            <div class="product-action">

                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                        <div class="product-info text-center">
                                            <div class="product-name">
                                                @if(app()->getLocale() == 'ar')
                                                    <a>{{$client->name_ar}}</a>
                                                @else
                                                    <a>{{$client->name_en}}</a>
                                                @endif

                                            </div>
                                        </div>
                                        <!-- product-info start -->
                                    </div>
                                    <!-- single product end -->
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="Partners" class="team-member section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- section title start -->
                    <div class="section-heading text-center">
                        <h2>{{App\Helpers\Helper::translate('our_branches')}}</h2>
                    </div>
                    <!-- section title end -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                    <h4 style="text-align: center;">{{App\Helpers\Helper::translate('gda')}}</h4>
                    <div class="camp-img position-relative w-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3713.6703850916133!2d39.25727478506027!3d21.442197085775888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3cc0bad8a9025%3A0xd3fb3c91c92dce6b!2z2LXZitin2YbYqSDYp9mK2LPZiNiy2Ygg2YXYudiq2YXYryDYs9mKINin2LM!5e0!3m2!1sar!2ssa!4v1646477911798!5m2!1sar!2ssa"  width="100%" height="560" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-lg-6 order-lg-1">
                    <h4 style="text-align: center;">{{App\Helpers\Helper::translate('elryad')}}</h4>
                    <div class="camp-img position-relative w-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3626.6958197865515!2d46.74725571499841!3d24.63416668416117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x22f1dde015aed8a1!2zMjTCsDM4JzAzLjAiTiA0NsKwNDQnNTguMCJF!5e0!3m2!1sen!2seg!4v1646477941519!5m2!1sen!2seg"  width="100%" height="560" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
