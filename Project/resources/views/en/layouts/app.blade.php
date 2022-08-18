<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <link rel="dns-prefetch" href="//demos.sypna.ir">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//youtu.be">
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="subject" content="@yield('subject')"/>
    <meta name="robots" content="index, follow" />
    <meta name="topic" content="@yield('topic')" />
    <meta name="designer" content="@yield('designer')" />
    <meta name="url" content="@yield('url')" />
	<meta property="og:site_name" content="@yield('site_name')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:description" content="@yield('og_description')" />
    <meta property="og:brand" content="@yield('brand')" />
    <meta property="og:locale" content="fa" />
    <meta property="og:type" content="@yield('type')" />
    <meta property="og:title" content="@yield('og_title')" />
    @yield('head')
    <link rel="icon" type="image/png" sizes="56x56" href="@yield('fav')">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <link rel="stylesheet" href="https://demos.sypna.ir/techno_res/ltr/techno/assets/css/bootstrap.min.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="https://demos.sypna.ir/techno_res/ltr/techno/assets/css/owl.carousel.min.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="https://demos.sypna.ir/techno_res/ltr/techno/assets/css/nivo-slider.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="https://demos.sypna.ir/techno_res/ltr/techno/assets/css/animate.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="https://demos.sypna.ir/techno_res/ltr/techno/assets/css/animated-text.css"
        type="text/css" media="all" />
    <link type="text/css" rel="stylesheet"
        href="https://demos.sypna.ir/techno_res/ltr/techno/assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://demos.sypna.ir/techno_res/ltr/techno/assets/css/flaticon.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="https://demos.sypna.ir/techno_res/ltr/techno/assets/css/meanmenu.min.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="https://demos.sypna.ir/techno_res/ltr/techno/assets/css/owl.transitions.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="https://demos.sypna.ir/techno_res/ltr/techno/venobox/venobox.css" type="text/css"
        media="all" />
        <link rel="stylesheet" href="{{asset('css/en/style-en.css')}}">
        <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="/js/app.js"></script>

</head>

<body>
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
                <div class="col-md-3">
                    <div class="logo mt-4">
                        <a class="logo_img" href="/" ><img src="@yield('logo1')"
                                alt="" /></a><a class="main_sticky"
                            href="/" ><img src="@yield('logo2')" alt="astute" /></a></div>
                </div>
                <div class="col-md-9">
                    <nav class="techno_menu">
                        <ul class="nav_scroll mr-3">
                            <li><a href="/en">Home</a></li>
                            @yield('menu')
                        </ul>

                        @if (Auth::check())
                        <a href="@if(auth()->user()->level == 1) {{route('me')}} @endif" class="btn btn-light"><i class="fa fa-user"></i> {{auth()->user()->name}}</a>
                        <a href="/logout" class="btn btn-light" onclick="event.preventDefault();document.getElementById('logout_form').submit()"><i class="fa fa-lock"></i> Log Out</a>
                        <form action="{{route('logout')}}" method="POST" id="logout_form">@csrf</form>
                        @else
                        <div class="donate-btn-header"><a class="dtbtn" href="{{route('en.login')}}">Sing In</a></div>
                        @endif
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu-area d-sm-block d-md-block d-lg-none ">
        <div class="mobile-menu">
            <nav class="techno_menu">
                <ul class="nav_scroll">
                    <li><a href="/en">Home</a></li>
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
                        <div class="footer-bottom-logo pb-40"><img
                                src="@yield('footer_logo')" alt="" /></div>
                        <div class="company-info-desc">
                            <p>
                                @yield('text_footer')    
                            </p>
                        </div>
                        <div class="follow-company-info pt-3">
                            <div class="follow-company-text mr-3"><a href="#">
                                    <p>Follow Us</p>
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
                            <h4 class="widget-title pb-3">Popular Post</h4>
                            @yield('blog_footer')

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="widget widgets-company-info wow fadeInUp" data-wow-delay="0.3s">
                        <h3 class="widget-title pb-4">Company Address</h3>
                        @yield('information_footer')

                    </div>
                </div>
            </div>
            <div class="row footer-bottom mt-70 pt-3 pb-1 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-12 col-md-12">
                    <div class="footer-bottom-content">
                        <div class="footer-bottom-content-copy text-center">
                            <p>@yield('copy_text_footer')  </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/vendor/jquery-3.2.1.min.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/wow.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="https://demos.sypna.ir/techno_res/ltr/techno/venobox/venobox.js"></script>
    <script type="text/javascript" src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/ajax-mail.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/animated-text.js"></script>
    <script type="text/javascript" src="https://demos.sypna.ir/techno_res/ltr/techno/venobox/venobox.min.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/isotope.pkgd.min.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/jquery.meanmenu.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/jquery.scrollUp.js"></script>
    <script type="text/javascript"
        src="https://demos.sypna.ir/techno_res/ltr/techno/assets/js/techno_ltr_techno.js"></script>
        <script src="https://kit.fontawesome.com/6a20b4ab46.js" crossorigin="anonymous"></script>

</body>

</html>