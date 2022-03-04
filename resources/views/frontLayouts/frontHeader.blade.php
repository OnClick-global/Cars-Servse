<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <!-- Basic page needs
    ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Car Series </title>
    <meta name="description" content="">

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon.ico -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('/')}}/assets/front/img/favicon.ico">

    <!-- ============== All CSS ================ -->
    <!-- normalize css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/normalize.css">

    <!-- animate css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/animate.css">

    <!-- bootstrap css
    ============================================ -->
    @if(app()->getLocale() == 'ar')

        <link rel="stylesheet" href="{{url('/')}}/assets/front/css/bootstrap.min.css">
    @else
        <link rel="stylesheet" href="{{url('/')}}/assets/front/css/bootstrap.min.css">
    @endif


<!-- meanmenu css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/meanmenu.min.css">

    <!-- font-awesome css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/font-awesome.min.css">

    <!-- icofont css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/icofont.css">

    <!-- change-text css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/change-text.css">

    <!-- YTPlayer css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/jquery.mb.YTPlayer.min.css">

    <!-- main css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/main.css">

    <!-- owl.carousel css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/owl.carousel.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/owl.theme.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/owl.transitions.css">

    <!-- nivo-slider css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/lib/css/nivo-slider.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/front/lib/css/preview.css">

    <!-- style css
    ============================================ -->
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{url('/')}}/assets/front/style.rtl.css?v=1.8">
    @else
        <link rel="stylesheet" href="{{url('/')}}/assets/front/style.css?v=1.8">
@endif
<!-- responsive css
    ============================================ -->
    <link rel="stylesheet" href="{{url('/')}}/assets/front/css/responsive.css">

    <!-- modernizr js
    ============================================ -->
    <script src="{{url('/')}}/assets/front/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
    href="../../../browsehappy.com/default.htm">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- header area start -->
<header id="sticker">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!-- welcome message start -->
                    <div class="welcome-msg">
                        <ul>
                            <li><p>
                                    <span> {{App\Helpers\Helper::translate('plames')}}: </span>{{\App\Models\Setting::where('key','phone1')->first()->value}}
                                    - {{\App\Models\Setting::where('key','phone2')->first()->value}}
                                </p></li>
                        </ul>
                    </div>
                    <!-- welcome message end -->
                </div>
                <div class="col-md-5">
                    <div class="header-top-menu">
                        <!-- top social start -->
                        <div class="top-social">
                            <ul>
                                <li><a target="_blank"
                                       href="{{\App\Models\Setting::where('key','snapchat')->first()->value}}"> <i
                                            class="fa fa-snapchat-ghost"></i> </a></li>
                                <li><a target="_blank"
                                       href="{{\App\Models\Setting::where('key','facebook')->first()->value}}"> <i
                                            class="fa fa-facebook"></i> </a></li>
                                <li><a target="_blank"
                                       href="{{\App\Models\Setting::where('key','instagram')->first()->value}}"> <i
                                            class="fa fa-instagram"></i> </a></li>
                                <li><a href="{{\App\Models\Setting::where('key','twitter')->first()->value}}"> <i
                                            class="fa fa-twitter"></i> </a></li>
                                <li>
                                    <a href="https://wa.me/{{\App\Models\Setting::where('key','whatsapp')->first()->value}}">
                                        <i class="fa fa-whatsapp"></i> </a></li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href=""
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        @if(app()->getLocale() == 'en')
                                            <span>english</span>
                                        @else
                                            <span>العربيه</span>
                                        @endif
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right animated bounceInDown">
                                        @if(app()->getLocale() == 'en')
                                            <a style="color: #000000" class="dropdown-item"
                                               href="{{url('change_lang/ar')}}">
                                                العربيه
                                            </a>
                                        @else
                                            <a style="color: #000000" class="dropdown-item"
                                               href="{{url('change_lang/en')}}">
                                                English
                                            </a>
                                        @endif
                                    </div>
                                </li>


                            </ul>

                        </div>
                        <!-- top social end -->
                        <!-- cart menu start -->
                        <div class="cart-menu">
                            <ul>
                                <li>

                                </li>
                            </ul>
                        </div>
                        <!-- cart menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
