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

                                <!-- single menu -->
                                <li><a href="about-us.html">{{App\Helpers\Helper::translate('about company')}}</a></li>
                                <li><a href="about-us.html">{{App\Helpers\Helper::translate('Client')}}</a></li>
                                <li><a href="about-us.html">{{App\Helpers\Helper::translate('Partners')}}</a></li>
                                <li><a href="about-us.html">{{App\Helpers\Helper::translate('Services')}}</a></li>
                                <li class="has-sub"><a href="#">{{App\Helpers\Helper::translate('Cars')}}<i class="icofont icofont-simple-down"></i></a>
                                    <!-- sub menu start -->
                                    <ul class="sub-menu left">
                                        <li><a href="slider-nivo.html">Basic Services</a></li>
                                        <li><a href="slider-nivo.html">Light Services</a></li>
                                        <li><a href="slider-nivo.html">Heavy Services</a></li>
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
<!-- mainmenu area end -->
<!-- mobile menu area start -->
{{--<div class="mobile-menu-area hidden-lg hidden-md hidden-sm">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-xs-12">--}}
{{--                <div class="logo">--}}
{{--                    <a href="index.html">--}}
{{--                        <img src="assets/front/img/logo-light.png" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="mobile-menu">--}}
{{--                    <nav>--}}
{{--                        <ul>--}}
{{--                            <li><a href="#">Home</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="index.html">home default</a></li>--}}
{{--                                    <li><a href="index-video-bg.html">home video</a></li>--}}
{{--                                    <li><a href="index-animated-text.html">animated text</a></li>--}}
{{--                                    <li><a href="index-change-text.html">change text</a></li>--}}
{{--                                    <li><a href="index-carousel.html">home carousel</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="about-us.html">About Us</a></li>--}}
{{--                            <li><a href="#">Features</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#">header style</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="header-default.html"> header default </a></li>--}}
{{--                                            <li><a href="header-static.html"> header static </a></li>--}}
{{--                                            <li><a href="header-without-top-bar.html"> header no bar </a></li>--}}
{{--                                            <li><a href="header-transparent.html"> header transparent </a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="slider-nivo.html">nivo slider</a></li>--}}
{{--                                    <li><a href="#">slider animation text</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="slider-animated-text-1.html"> animation text 1 </a></li>--}}
{{--                                            <li><a href="slider-animated-text-2.html"> animation text 2 </a></li>--}}
{{--                                            <li><a href="slider-animated-text-3.html"> animation text 3 </a></li>--}}
{{--                                            <li><a href="slider-animated-text-4.html"> animation text 4 </a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#">slider change text</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="slider-rotate-text-1.html">rotate text 1</a></li>--}}
{{--                                            <li><a href="slider-rotate-text-2.html">rotate text 2</a></li>--}}
{{--                                            <li><a href="slider-rotate-text-3.html">rotate text 3</a></li>--}}
{{--                                            <li><a href="slider-text-clip.html">text clip</a></li>--}}
{{--                                            <li><a href="slider-text-loading.html">text loading</a></li>--}}
{{--                                            <li><a href="slider-text-push.html">text push</a></li>--}}
{{--                                            <li><a href="slider-text-scale.html">text scale</a></li>--}}
{{--                                            <li><a href="slider-text-slide.html">text slide</a></li>--}}
{{--                                            <li><a href="slider-text-zoom.html">text zoom</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#">page title group 1</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="assets/front/page-title-default.html">page title default</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="assets/front/page-title-default-2.html">page title default--}}
{{--                                                    2</a></li>--}}
{{--                                            <li><a href="assets/front/page-title-center.html">page title center</a></li>--}}
{{--                                            <li><a href="assets/front/page-title-right.html">page title right</a></li>--}}
{{--                                            <li><a href="assets/front/page-title-right-2.html">page title right 2</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="assets/front/page-title-bg-dark.html">page title bg dark</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="assets/front/page-title-bg-dark-2.html">page title bg dark--}}
{{--                                                    2</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#">page title group 2</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="assets/front/page-title-bg-color.html">page title bg color</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="assets/front/page-title-bg-color-2.html">page title bg color--}}
{{--                                                    2</a></li>--}}
{{--                                            <li><a href="assets/front/page-title-bg-fixed.html">page title bg fixed</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="assets/front/page-title-bg-fixed-2.html">page title bg fixed--}}
{{--                                                    2</a></li>--}}
{{--                                            <li><a href="assets/front/page-title-pattern.html">page title bg pattern</a>--}}
{{--                                            </li>--}}
{{--                                            <li><a href="assets/front/page-title-pattern-2.html">page title bg pattern--}}
{{--                                                    2</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="#">footer style</a>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="assets/front/footer-dark.html">footer dark</a></li>--}}
{{--                                            <li><a href="assets/front/footer-light.html">footer light</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="shop.html">Shop</a></li>--}}
{{--                            <li><a href="#">Pages</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="assets/front/about-us.html">about us</a></li>--}}
{{--                                    <li><a href="assets/front/blog.html">blog</a></li>--}}
{{--                                    <li><a href="assets/front/blog-2-column.html">blog 2 column</a></li>--}}
{{--                                    <li><a href="assets/front/blog-list.html">blog list</a></li>--}}
{{--                                    <li><a href="assets/front/blog-left-sidebar.html">blog left sidebar</a></li>--}}
{{--                                    <li><a href="assets/front/blog-right-sidebar.html">blog right sidebar</a></li>--}}
{{--                                    <li><a href="assets/front/blog-list-left-sidebar.html">blog list left sidebar</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="assets/front/blog-list-right-sidebar.html">blog list right sidebar</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="assets/front/blog-details.html">blog details</a></li>--}}
{{--                                    <li><a href="assets/front/blog-details-left-sidebar.html">blog details left--}}
{{--                                            sidebar</a></li>--}}
{{--                                    <li><a href="assets/front/blog-details-right-sidebar.html">blog details right--}}
{{--                                            sidebar</a></li>--}}
{{--                                    <li><a href="assets/front/our-services.html">our services</a></li>--}}
{{--                                    <li><a href="assets/front/contact.html">contact us</a></li>--}}
{{--                                    <li><a href="assets/front/shop.html">shop</a></li>--}}
{{--                                    <li><a href="assets/front/shop-3-column.html">shop 3 column</a></li>--}}
{{--                                    <li><a href="assets/front/shop-list.html">shop list</a></li>--}}
{{--                                    <li><a href="assets/front/shop-left-sidebar.html">shop left sidebar</a></li>--}}
{{--                                    <li><a href="assets/front/shop-right-sidebar.html">shop right sidebar</a></li>--}}
{{--                                    <li><a href="assets/front/shop-list-left-sidebar.html">shop list left sidebar</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="assets/front/shop-list-right-sidebar.html">shop list right sidebar</a>--}}
{{--                                    </li>--}}
{{--                                    <li><a href="assets/front/shop-details.html">shop details</a></li>--}}
{{--                                    <li><a href="assets/front/cart.html">shopping cart</a></li>--}}
{{--                                    <li><a href="assets/front/cart-empty.html">shopping cart empty</a></li>--}}
{{--                                    <li><a href="assets/front/checkout.html">checkout</a></li>--}}
{{--                                    <li><a href="assets/front/wishlist.html">wishlist</a></li>--}}
{{--                                    <li><a href="assets/front/wishlist-empty.html">wishlist empty</a></li>--}}
{{--                                    <li><a href="assets/front/eror-404.html">eror 404</a></li>--}}
{{--                                    <li><a href="assets/front/eror-500.html">eror 500</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li><a href="#">shortcode</a>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="assets/front/shortcode-about-us.html">about us</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-button.html">buttons</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-alert.html">alerts</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-tab.html">tab</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-modal.html">modal</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-tooltip.html">tooltip</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-collapse.html">collapse</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-progress-bar.html">progress bar</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-blog.html">blog</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-blog-details.html">blog details</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-blog-slider.html">blog slider</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-our-services.html">our services</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-shop.html">shop</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-shop-details.html">shop details</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-shop-tab.html">shop tab</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-team-member.html">team member</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-testimonial.html">testimonial</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-video.html">video</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-map.html">map</a></li>--}}
{{--                                    <li><a href="assets/front/shortcode-contact-form.html">contact form</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- mobile menu area end -->
</header>
<!-- header area end -->
<!-- slider area start -->
