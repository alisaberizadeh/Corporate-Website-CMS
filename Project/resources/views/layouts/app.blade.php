<!DOCTYPE HTML>
<html lang="fa-IR" dir="rtl">

<head>
    <link rel="dns-prefetch" href="//demos.sypna.ir">
    <link rel="dns-prefetch" href="//youtu.be">
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="subject" content="@yield('subject')" />
    <meta name="robots" content="index, follow" />
    <meta name="topic" content="@yield('topic')" />
    <meta name="designer" content="@yield('designer')" />
    <meta name="url" content="@yield('url')" />
    <meta property="og:site_name" content="@yield('site_name')" />
    <link rel="canonical" href="@yield('canonical')" />
    <meta property="og:description" content="@yield('og_description')" />
    <meta property="og:brand" content="@yield('brand')" />
    <meta property="og:locale" content="fa" />
    <meta property="og:type" content="@yield('type')" />
    <meta property="og:title" content="@yield('og_title')" />
    @yield('head')
    <link rel="icon" type="image/png" sizes="56x56" href="@yield('fav')">
    <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/owl.carousel.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/nivo-slider.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/animated-text.css" type="text/css" media="all" />
    <link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/flaticon.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/meanmenu.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/owl.transitions.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/venobox.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/css/Vazirmatn-FD-font-face.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css" media="all" />
    <script type="text/javascript" src="/js/modernizr-3.5.0.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script src="/js/app.js"></script>
</head>

<body dir="rtl">
    @include('sweet::alert')

    <div class="header_top_menu pt-2 pb-2 bg_color">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8">
                    <div class="header_top_menu_address">
                        <div class="header_top_menu_address_inner">
                            <ul>
                                @yield('information')
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <div class="header_top_menu_icon">
                        <div class="header_top_menu_icon_inner">
                            <ul>
                                @yield('social')
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="sticky-header" class="techno_nav_manu d-md-none d-lg-block d-sm-none d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="logo mt-4"><a class="logo_img" href="/"><img src="@yield('logo1')"
                                alt="@yield('title')" /></a><a class="main_sticky" href="/"><img
                                src="@yield('logo2')" alt="@yield('title')" /></a></div>
                </div>
                <div class="col-md-10">
                    <nav class="techno_menu d-flex align-items-center justify-content-between">
                        <ul class="nav_scroll mr-4">
                            <li><a href="/">خانه</a></li>
                            @yield('menu')


                        </ul>

                        {{-- @yield('btn_en') --}}

                        <div>
                            @if (Auth::check())
                                <a target="_blanck"
                                    href="@if (auth()->user()->level == 1) {{ route('me') }} @endif"
                                    class="btn btn-light"><i class="fa fa-user"></i> {{ auth()->user()->name }} -
                                    داشبورد</a>
                                <a href="/logout" class="btn btn-light"
                                    onclick="event.preventDefault();document.getElementById('logout_form').submit()"><i
                                        class="fa fa-lock"></i> خروج</a>
                                <form action="{{ route('logout') }}" method="POST" id="logout_form">@csrf</form>
                            @else
                                <div class="donate-btn-header"><a class="dtbtn" href="/login">ورود</a></div>
                            @endif
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
        <div class="mobile-menu">
            <nav class="techno_menu">
                <ul class="nav_scroll">
                    <li><a href="">خانه</a></li>
                    @yield('menu')

                </ul>
            </nav>
        </div>
    </div>


    @yield('content')

    <div class="footer_middle_area style_three pt-95">
        @yield('link_whatsapp')

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info wow fadeInUp" data-wow-delay="0.3s">
                        <div class="footer-bottom-logo pb-40"><img src="@yield('footer_logo')" alt="لوگو فوتر" /></div>
                        <div class="company-info-desc">
                            <p>
                                @yield('text_footer')
                            </p>
                        </div>
                        <div class="follow-company-info pt-3">
                            <div class="follow-company-text ml-3"><a href="#">
                                    <p>دنبال کنید</p>
                                </a></div>
                            <div class="follow-company-icon">
                                @yield('social_footer')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div id="em-recent-post-widget">
                        <div class="single-widget-item wow fadeInUp" data-wow-delay="0.3s">
                            <h4 class="widget-title pb-3">محبوبترین مطالب</h4>
                            @yield('blog_footer')


                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info wow fadeInUp" data-wow-delay="0.3s">
                        <h3 class="widget-title pb-4">آدرس شرکت</h3>

                        @yield('information_footer')

                    </div>
                </div>
            </div>
            <div class="row footer-bottom mt-70 pt-3 pb-1 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-content-copy">
                            <p>@yield('copy_text_footer') </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="/js/waypoints.min.js"></script>
    <script type="text/javascript" src="/js/wow.js"></script>
    <script type="text/javascript" src="/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/ajax-mail.js"></script>
    <script type="text/javascript" src="/js/animated-text.js"></script>
    <script type="text/javascript" src="/js/venobox.min.js"></script>
    <script type="text/javascript" src="/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript" src="/js/jquery.meanmenu.js"></script>
    <script type="text/javascript" src="/js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="/js/techno_rtl_techno.js"></script>
    <script src="/js/6a20b4ab46.js" crossorigin="anonymous"></script>

</body>

</html>
