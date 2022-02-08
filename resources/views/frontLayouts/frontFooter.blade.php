
<div class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4">
                <!-- single footer start -->
                <div class="single-footer-top">
                    <div class="footer-about-us">
                        <!-- small logo start -->
                        <a href="{{route('front')}}" class="footer-logo"> <img src="{{asset('uploads/setting')}}/{{\App\Models\Setting::where('key','logo_footer')->first()->value ?? ''}}" alt="">
                        </a>
                        <!-- small logo end -->
                        <!-- address start -->
                        <div class="footer-address">
                            @if(app()->getLocale()=='ar')
                            <p><span> {{App\Helpers\Helper::translate('address')}}: </span>{{\App\Models\Setting::where('key','adress_ar')->first()->value ?? ''}}</p>
                            @else
                                <p><span> {{App\Helpers\Helper::translate('address')}}: </span>{{\App\Models\Setting::where('key','adress_en')->first()->value ?? ''}}</p>
                            @endif
                        </div>
                        <!-- address end -->
                        <!-- contact info start -->
                        <div class="footer-contact-info">
                            <p><span> {{App\Helpers\Helper::translate('address')}}:</span> {{\App\Models\Setting::where('key','phone1')->first()->value ?? ''}} </p>
                            <p><span> {{App\Helpers\Helper::translate('Phone 1')}}:</span> {{\App\Models\Setting::where('key','phone2')->first()->value ?? ''}} </p>
                            <p><span> {{App\Helpers\Helper::translate('Phone 2')}}:</span> {{\App\Models\Setting::where('key','Email')->first()->value ?? ''}} </p>
                        </div>
                        <!-- contact info end -->
                    </div>
                </div>
                <!-- single footer end -->
            </div>
            <div class="col-sm-2">
                <!-- single footer start -->
                <div class="single-footer-top">
                    <!-- section title start -->
                    <div class="footer-top-title">
                        <h3>{{App\Helpers\Helper::translate('Services')}}</h3>
                    </div>
                    <!-- section title end -->
                    <!-- footer menu start -->
                    <div class="footer-top-menu">
                        <ul>
                            <li><a href="{{route('front')}}#aboutCS">{{App\Helpers\Helper::translate('about company')}}</a></li>
                            <li><a href="{{route('front')}}#Partners">{{App\Helpers\Helper::translate('Partners')}}</a></li>
                            <li><a href="{{route('front')}}#Clients">{{App\Helpers\Helper::translate('Clients')}}</a></li>
                            <li><a href="{{route('front')}}#Services">{{App\Helpers\Helper::translate('Services')}}</a></li>
                            <li><a href="{{route('tensoView')}}">{{App\Helpers\Helper::translate('tenso')}}</a></li>
                        </ul>
                    </div>
                    <!-- footer menu end -->
                </div>
                <!-- single footer end -->
            </div>
            <div class="col-md-2 col-md-offset-1 col-sm-3">

            </div>
            <div class="col-md-3 col-md-offset-1 col-sm-3">
                <!-- single footer start -->

                <!-- single footer end -->
            </div>
        </div>
    </div>
</div>
<!-- footer top end -->


<!-- ============== All JS ================ -->
<!-- jquery js
=========================================== -->
<script src="assets/front/js/vendor/jquery-1.12.0.min.js"></script>

<!-- bootstrap js
=========================================== -->
<script src="assets/front/js/bootstrap.min.js"></script>

<!-- meanmenu js
=========================================== -->
<script src="assets/front/js/jquery.meanmenu.js"></script>

<!-- scrollUp js
=========================================== -->
<script src="assets/front/js/jquery.scrollUp.min.js"></script>

<!-- wow js
=========================================== -->
<script src="assets/front/js/wow.min.js"></script>

<!-- owl.carousel js
=========================================== -->
<script src="assets/front/js/owl.carousel.min.js"></script>

<!-- change-text js
=========================================== -->
<script src="assets/front/js/change-text.js"></script>

<!-- YTPlayer js
=========================================== -->
<script src="assets/front/js/jquery.mb.YTPlayer.min.js"></script>

<!-- textillate js
=========================================== -->
<script src="assets/front/js/jquery.lettering.js"></script>
<script src="assets/front/js/jquery.textillate.js"></script>

<!-- nivo.slider js
=========================================== -->
<script src="assets/front/lib/js/jquery.nivo.slider.js"></script>
<script src="assets/front/lib/home.js"></script>

<!-- plugins js
=========================================== -->
<script src="assets/front/js/plugins.js"></script>

<!-- main js
=========================================== -->
<script src="assets/front/js/main.js"></script>
</body>
</html>
