<!-- mainmenu area start -->
<div class="main-menu-area hidden-xs">
    <div class="container">
        <div class="menu-position">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <!-- logo start -->
                    <div class="logo">
                        <a href="{{route('front')}}">
                            <img style="height: 50px;"
                                 src="{{asset('uploads/setting')}}/{{\App\Models\Setting::where('key','logo_header')->first()->value ?? ''}}"
                                 alt="">
                        </a>
                    </div>
                    <!-- logo end -->
                </div>
                @php
                    $cars=\App\Models\Car::where('status','1')->get();
                    $isuzu_services=\App\Models\Service::where('type','isuzu')->get();
                    $denso_services=\App\Models\Service::where('type','denso')->get();
                    $services=\App\Models\Service::where('type','services')->get();
                @endphp
                <div class="col-md-10 col-sm-10 static">
                    <!-- main-menu start -->
                    <div class="main-menu">
                        <nav>
                            <ul>
                                <!-- single menu -->
                                <li class="has-sub">
                                    <a href="javascript:void(this);">{{App\Helpers\Helper::translate('Cars')}}
                                        <i class="icofont icofont-simple-down"></i>
                                    </a>
                                    <ul class="sub-menu left">
                                        @foreach($cars as $car)
                                            <li><a href="{{route('carFrontView',$car->id)}}">
                                                    {{ app()->getLocale() == 'en' ? $car->name_en : $car->name_ar }}
                                                </a></li>
                                        @endforeach
                                    </ul>
                                    <!-- sub menu end -->
                                </li>
                                <li class="has-sub">
                                    <a href="javascript:void(this);">{{App\Helpers\Helper::translate('usizu_service')}}
                                        <i class="icofont icofont-simple-down"></i>
                                    </a>
                                    <!-- sub menu start -->
                                    <ul class="sub-menu left">
                                        @foreach($isuzu_services as $row)
                                            <li><a href="{{route('serviceFrontView',$row->id)}}">
                                                    {{ app()->getLocale() == 'en' ? $row->name_en : $row->name_ar }}
                                                </a></li>
                                        @endforeach
                                    </ul>
                                    <!-- sub menu end -->
                                </li>
                                <li class="has-sub">
                                    <a href="javascript:void(this);">{{App\Helpers\Helper::translate('Tenso')}}
                                        <i class="icofont icofont-simple-down"></i>
                                    </a>
                                    <!-- sub menu start -->
                                    <ul class="sub-menu left">
                                        @foreach($denso_services as $row)
                                            <li><a href="{{route('serviceFrontView',$row->id)}}">
                                                    {{ app()->getLocale() == 'en' ? $row->name_en : $row->name_ar }}
                                                </a></li>
                                        @endforeach
                                    </ul>
                                    <!-- sub menu end -->
                                </li>
                                <li class="has-sub">
                                    <a href="javascript:void(this);">{{App\Helpers\Helper::translate('Services')}}
                                        <i class="icofont icofont-simple-down"></i>
                                    </a>
                                    <!-- sub menu start -->

                                    <ul class="sub-menu left">
                                        @foreach($services as $row)
                                            <li><a href="{{route('serviceFrontView',$row->id)}}">
                                                    {{ app()->getLocale() == 'en' ? $row->name_en : $row->name_ar }}
                                                </a></li>
                                        @endforeach
                                    </ul>
                                    <!-- sub menu end -->
                                </li>
                                <li>
                                    <a href="{{route('front')}}#Partners">{{App\Helpers\Helper::translate('Partners')}}</a>
                                </li>
                                <li>
                                    <a href="{{route('front')}}#aboutCS">{{App\Helpers\Helper::translate('about company')}}</a>
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
                        <img style="height: 50px;"
                             src="{{asset('uploads/setting')}}/{{\App\Models\Setting::where('key','logo_header')->first()->value ?? ''}}"
                             alt="">
                    </a>
                </div>
                <div class="mobile-menu">
                    <nav>
                        <ul>
                            <!-- single menu -->
                            <li class="has-sub">
                                <a href="javascript:void(this);">{{App\Helpers\Helper::translate('Cars')}}
                                    <i class="icofont icofont-simple-down"></i>
                                </a>
                                <!-- sub menu start -->
                                @php($cars=\App\Models\Car::where('status','1')->get())
                                <ul class="sub-menu left">
                                    @foreach($cars as $car)
                                        <li><a href="{{route('carFrontView',$car->id)}}">
                                                {{ app()->getLocale() == 'en' ? $car->name_en : $car->name_ar }}
                                            </a></li>
                                    @endforeach
                                </ul>
                                <!-- sub menu end -->
                            </li>
                            <li class="has-sub">
                                <a href="javascript:void(this);">{{App\Helpers\Helper::translate('usizu_service')}}
                                    <i class="icofont icofont-simple-down"></i>
                                </a>
                                <!-- sub menu start -->
                                <ul class="sub-menu left">
                                    @foreach($isuzu_services as $row)
                                        <li><a href="{{route('serviceFrontView',$row->id)}}">
                                                {{ app()->getLocale() == 'en' ? $row->name_en : $row->name_ar }}
                                            </a></li>
                                    @endforeach
                                </ul>
                                <!-- sub menu end -->
                            </li>

                            <li class="has-sub">
                                <a href="javascript:void(this);">{{App\Helpers\Helper::translate('Tenso')}}
                                    <i class="icofont icofont-simple-down"></i>
                                </a>
                                <!-- sub menu start -->
                                <ul class="sub-menu left">
                                    @foreach($denso_services as $row)
                                        <li><a href="{{route('serviceFrontView',$row->id)}}">
                                                {{ app()->getLocale() == 'en' ? $row->name_en : $row->name_ar }}
                                            </a></li>
                                    @endforeach
                                </ul>
                                <!-- sub menu end -->
                            </li>
                            <li class="has-sub">
                                <a href="javascript:void(this);">{{App\Helpers\Helper::translate('Services')}}
                                    <i class="icofont icofont-simple-down"></i>
                                </a>
                                <!-- sub menu start -->
                                <ul class="sub-menu left">
                                    @foreach($services as $row)
                                        <li><a href="{{route('serviceFrontView',$row->id)}}">
                                                {{ app()->getLocale() == 'en' ? $row->name_en : $row->name_ar }}
                                            </a></li>
                                    @endforeach
                                </ul>
                                <!-- sub menu end -->
                            </li>
                            <li>
                                <a href="{{route('front')}}#Partners">{{App\Helpers\Helper::translate('Partners')}}</a>
                            </li>
                            <li>
                                <a href="{{route('front')}}#aboutCS">{{App\Helpers\Helper::translate('about company')}}</a>
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

