<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">

            <li class="menu-item @if( Request::segment(1)== 'home' ) menu-item-active @endif "  aria-haspopup="true">
                <a href="{{route('home')}}" class="menu-link">
                    <i class="menu-icon flaticon-home"></i>
                    <span class="menu-text">{{App\Helpers\Helper::translate('Home')}}</span>
                </a>
            </li>
            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'Slider' ) menu-item-open @endif
                " aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-security"></i>
                    <span class="menu-text">{{App\Helpers\Helper::translate('Slider')}}</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-active" aria-haspopup="true">
                        <li class="menu-item @if( Request::segment(2)== 'addNewSlider' ) menu-item-active @endif "  aria-haspopup="true">
                            <a href="{{route('add new Slider')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{App\Helpers\Helper::translate('New Slider')}}</span>
                            </a>
                        </li>
                        <li class="menu-item @if( Request::segment(2)== 'allSlider' ) menu-item-active @endif "  aria-haspopup="true">
                            <a href="{{route('all Sliders')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{App\Helpers\Helper::translate('All Slider')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'cars' ) menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-truck"></i>
                    <span class="menu-text">{{App\Helpers\Helper::translate('Cars')}}</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-active" aria-haspopup="true">
                        <li class="menu-item @if( Request::segment(2)== 'addNewCar' ) menu-item-active @endif "  aria-haspopup="true">
                            <a href="{{route('add new car')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{App\Helpers\Helper::translate('New Car')}}</span>
                            </a>
                        </li>
                        <li class="menu-item @if( Request::segment(2)== 'allCars' ) menu-item-active @endif "  aria-haspopup="true">
                            <a href="{{route('allCars')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{App\Helpers\Helper::translate('All Car')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'partners' ) menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-security"></i>
                    <span class="menu-text">{{App\Helpers\Helper::translate('Partners')}}</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-active" aria-haspopup="true">
                        <li class="menu-item @if( Request::segment(2)== 'addNewPartner' ) menu-item-active @endif "  aria-haspopup="true">
                            <a href="{{route('add new partner')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{App\Helpers\Helper::translate('New Partner')}}</span>
                            </a>
                        </li>
                        <li class="menu-item @if( Request::segment(2)== 'allPartner' ) menu-item-active @endif "  aria-haspopup="true">
                            <a href="{{route('all partner')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{App\Helpers\Helper::translate('All Partners')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'services' ) menu-item-open @endif
                " aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-statistics"></i>
                    <span class="menu-text">{{App\Helpers\Helper::translate('services')}}</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-active" aria-haspopup="true">
                        <li class="menu-item @if( Request::segment(2)== 'addNewService' ) menu-item-active @endif "  aria-haspopup="true">
                            <a href="{{route('add new service')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{App\Helpers\Helper::translate('New Service')}}</span>
                            </a>
                        </li>
                        <li class="menu-item @if( Request::segment(2)== 'allService' ) menu-item-active @endif "  aria-haspopup="true">
                            <a href="{{route('all_service')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{App\Helpers\Helper::translate('All Services')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item menu-item-submenu @if( Request::segment(1)== 'clients' ) menu-item-open @endif" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-customer"></i>
                    <span class="menu-text">{{App\Helpers\Helper::translate('Clients')}}</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-active" aria-haspopup="true">
                        <li class="menu-item @if( Request::segment(2)== 'addNewClient' ) menu-item-active @endif "  aria-haspopup="true">
                            <a href="{{route('add new client')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{App\Helpers\Helper::translate('New Client')}}</span>
                            </a>
                        </li>
                        <li class="menu-item @if( Request::segment(2)== 'allClient' ) menu-item-active @endif "  aria-haspopup="true">
                            <a href="{{route('all client')}}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{App\Helpers\Helper::translate('All Clients')}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item @if( Request::segment(1)== 'tenso' ) menu-item-active @endif" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('alltenso')}}" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-car"></i>
                    <span class="menu-text">{{App\Helpers\Helper::translate('tenso')}}</span>
                </a>
            </li>
            <li class="menu-item @if( Request::segment(1)== 'isuzu' ) menu-item-active @endif" aria-haspopup="true" data-menu-toggle="hover">
                <a href="{{route('allisuzu')}}" class="menu-link menu-toggle">
                    <i class="menu-icon flaticon-car"></i>
                    <span class="menu-text">{{App\Helpers\Helper::translate('isuzu')}}</span>
                </a>
            </li>
            <li class="menu-item @if( Request::segment(1)== 'about' ) menu-item-active @endif "  aria-haspopup="true">
                <a href="{{route('about')}}" class="menu-link">
                    <i class="menu-icon flaticon2-box-1"></i>
                    <span class="menu-text">{{App\Helpers\Helper::translate('about')}}</span>
                </a>
            </li>
            <li class="menu-item @if( Request::segment(1)== 'settings' ) menu-item-active @endif "  aria-haspopup="true">
                <a href="{{route('settings')}}" class="menu-link">
                    <i class="menu-icon flaticon2-settings"></i>
                    <span class="menu-text">{{App\Helpers\Helper::translate('Settings')}}</span>
                </a>
            </li>
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
<!--end::Aside Menu-->
</div>
<!--end::Aside-->
<!--begin::Wrapper-->
<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
    <!--begin::Header-->
    <div id="kt_header" class="header header-fixed">
        <!--begin::Container-->
        <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <!--begin::Header Menu Wrapper-->
            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

            </div>
            <!--end::Header Menu Wrapper-->
            <!--begin::Topbar-->
            <div class="topbar">
                <!--begin::User-->
                <div class="topbar-item">
                    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">{{App\Helpers\Helper::translate('Hi,')}}</span>
                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{auth()->user()->name}}</span>
                        <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
											<span class="symbol-label font-size-h5 font-weight-bold">S</span>
										</span>
                    </div>
                </div>
                <!--end::User-->
            </div>
            <!--end::Topbar-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header-->

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                @yield('breadcrumb')
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
