<!-- mainmenu area start -->
<div class="main-menu-area hidden-xs">
    <div class="container">
        <div class="menu-position">
            <div class="row">
                <div class="col-md-3 col-sm-2">
                    <!-- logo start -->
                    <div class="logo">
                        <a href="{{route('front')}}">
                            <img style="height: 50px;" src="{{asset('uploads/setting')}}/{{\App\Models\Setting::where('key','logo')->first()->value ?? ''}}" alt="">
                        </a>
                    </div>
                    <!-- logo end -->
                </div>                
                <div class="col-md-9 col-sm-10 static">
                    <!-- main-menu start -->
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <!-- single menu -->
                                <li><a href="{{route('front')}}#aboutCS">{{App\Helpers\Helper::translate('about company')}}</a></li>
                                <li><a href="{{route('front')}}#Partners">{{App\Helpers\Helper::translate('Partners')}}</a></li>
                                <li><a href="{{route('front')}}#Clients">{{App\Helpers\Helper::translate('Clients')}}</a></li>
                                <li><a href="{{route('front')}}#Services">{{App\Helpers\Helper::translate('Services')}}</a></li>
                                <li><a href="{{route('tensoView')}}">{{App\Helpers\Helper::translate('tenso')}}</a></li>
                                <li class="has-sub">
                                    <a href="javascript:void(this);">{{App\Helpers\Helper::translate('Cars')}}
                                        <i class="icofont icofont-simple-down"></i>
                                    </a>
                                    <!-- sub menu start -->
                                    @php($cars=\App\Models\Car::where('status','1')->get())
                                    <ul class="sub-menu left">
                                        @foreach($cars as $car)
                                        <li><a href="{{route('carFrontView',$car->id)}}">{{$car->name_ar}}</a></li>
                                        @endforeach
                                    </ul>
                                    <!-- sub menu end -->
                                </li>
                                <!-- single menu -->

                                <!-- single menu -->

                            </ul>
                        </nav>
                    </div>
                    <!-- main-menu start -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="logo">
                    <a href="{{route('front')}}">
                        <img style="height: 50px;" src="{{asset('uploads/setting')}}/{{\App\Models\Setting::where('key','logo')->first()->value ?? ''}}" alt="">
                    </a>
                </div>
                <div class="mobile-menu">
                    <nav>
                        <ul>

                            <li><a href="{{route('front')}}#aboutCS">{{App\Helpers\Helper::translate('about company')}}</a></li>
                            <li><a href="{{route('front')}}#Partners">{{App\Helpers\Helper::translate('Partners')}}</a></li>
                            <li><a href="{{route('front')}}#Clients">{{App\Helpers\Helper::translate('Clients')}}</a></li>
                            <li><a href="{{route('front')}}#Services">{{App\Helpers\Helper::translate('Services')}}</a></li>
                            <li><a href="{{route('tensoView')}}">{{App\Helpers\Helper::translate('tenso')}}</a></li>
                            <li class="has-sub"><a href="javascript:void(this);">{{App\Helpers\Helper::translate('Cars')}}<i class="icofont icofont-simple-down"></i></a>
                                <!-- sub menu start -->
                                @php($cars=\App\Models\Car::where('status','1')->get())
                                <ul class="sub-menu left">
                                    @foreach($cars as $car)
                                        <li><a href="{{route('carFrontView',$car->id)}}">{{$car->name_ar}}</a></li>
                                    @endforeach
                                </ul>
                                <!-- sub menu end -->
                            </li>
                            <!-- single menu -->

                            <!-- single menu -->

                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

</header>

