<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <!-- Basic page needs
    ============================================ -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home || Tinker </title>
    <meta name="description" content="">

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon.ico -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/front/img/favicon.ico">

    <!-- ============== All CSS ================ -->
    <!-- normalize css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/css/normalize.css">

    <!-- animate css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/css/animate.css">

    <!-- bootstrap css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/css/bootstrap.min.css">

    <!-- meanmenu css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/css/meanmenu.min.css">

    <!-- font-awesome css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/css/font-awesome.min.css">

    <!-- icofont css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/css/icofont.css">

    <!-- change-text css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/css/change-text.css">

    <!-- YTPlayer css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/css/jquery.mb.YTPlayer.min.css">

    <!-- main css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/css/main.css">

    <!-- owl.carousel css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/front/css/owl.theme.css">
    <link rel="stylesheet" href="assets/front/css/owl.transitions.css">

    <!-- nivo-slider css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/lib/css/nivo-slider.css">
    <link rel="stylesheet" href="assets/front/lib/css/preview.css">

    <!-- style css
    ============================================ -->
    <link rel="stylesheet" href="assets/front/style.css">

    <!-- responsive css
    ============================================ -->
    <link rel="stylesheet" href="assets/front//ss/responsive.css">

    <!-- modernizr js
    ============================================ -->
    <script src="assets/front/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="../../../browsehappy.com/default.htm">upgrade your browser</a> to improve your experience.</p>
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
                            <li> <p> <span> {{App\Helpers\Helper::translate('Phone 1')}}: </span>{{\App\Models\Setting::where('key','phone1')->first()->value}}</p></li>

                            <li> <p> <span> {{App\Helpers\Helper::translate('Phone 2')}}: </span>{{\App\Models\Setting::where('key','phone1')->first()->value}}</p></li>
                        </ul>
                    </div>
                    <!-- welcome message end -->
                </div>
                <div class="col-md-5">
                    <div class="header-top-menu">
                        <!-- top social start -->
                        <div class="top-social">
                            <ul>
                                <li><a target="_blank" href="{{\App\Models\Setting::where('key','facebook')->first()->value}}"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="{{\App\Models\Setting::where('key','twitter')->first()->value}}"> <i class="fa fa-twitter"></i> </a></li>
                                <li><a href="https://wa.me/{{\App\Models\Setting::where('key','whatsapp')->first()->value}}"> <i class="fa fa-whatsapp"></i> </a></li>
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
