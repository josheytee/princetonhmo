<!doctype html>
<html class="no-js" lang="zxx">

<head>

    <!--========= Required meta tags =========-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Princeton HMO – Princeton Health Care Limited</title>

    <!--====== Favicon ======-->
    <link rel="shortcut icon" href="https://princetonhmo.net/wp-content/uploads/2019/08/logo_princeon.png"
        type="images/x-icon">

    <!--====== CSS Here ======-->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>
    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->
    @hasSection('navigation')
        {{-- <div class="pull-right"> --}}
        @yield('navigation')
        {{-- </div>

        <div class="clearfix"></div> --}}
    @else
        <!-- header start -->
        <header id="sticky-header" class="site-header">
            <div class="container custom-header">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3">
                        <a href="{{ url('/') }}" class="site-logo">
                            <img src="https://princetonhmo.net/wp-content/uploads/2019/08/logo_princeon.png"
                                alt="">
                        </a>
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="col-xl-6 col-lg-9 my-auto">
                        <div class="mainmenu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="{{ route('pages.home') }}">Home</a>
                                        <!-- <ul class="sub-menu">
                                            <li><a href="index.html">Home Style 01</a></li>
                                            <li><a href="index-2.html">Home Style 02</a></li>
                                            <li><a href="index-3.html">Home Style 03</a></li>
                                        </ul> -->
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.board') }}">About Us</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('pages.board') }}">The Board</a></li>
                                            <li><a href="{{ route('pages.team') }}"">Management Team</a></li>
                                            <li><a href="{{ route('pages.faq') }}">FAQs</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('pages.individual') }}">Our Plans</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('pages.individual') }}">Individual</a></li>
                                            <li><a href="{{ route('pages.corporate') }}"">Corporate</a></li>
                                            <li><a href="{{ route('pages.aged') }}">Aged</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('pages.resources') }}">Resources</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('pages.provider') }}">Be a provider</a></li>
                                            <li><a href="{{ route('pages.providers') }}">Providers List</a></li>
                                            <li><a href="{{ route('pages.benefits') }}">Your Benefit List</a></li>

                                        </ul>
                                    </li>
                                    {{-- <li><a href="{{ route('pages.providers') }}">Providers</a></li> --}}
                                    <!-- <li><a href="blog.html">Blog</a></li> -->
                                    <li><a href="{{ route('pages.contact') }}">Contact US</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 d-none d-xl-block">
                        <div class="header-top-info d-flex align-items-center">
                            <div class="icon">
                                <img src="assets/images/icons/header-top-icon-1.png" alt="">
                            </div>
                            <div class="content">
                                <p>Get Support</p>
                                <a href="tel:987876875865">+987 (876) 875 86 5</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
    @endif

    <div id="princeton">
        @yield('content')
    </div>

    <!-- footer start -->
    <footer class="site-footer pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 pr-50">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-widget">
                                <h4 class="widget-title">About Us</h4>
                                <p>Princeton Health is a Health Maintenance Organization founded in 1999 by a group of
                                    Nigerian Professionals from diverse backgrounds to operate as a Health Maintenance
                                    Organization (HMO) in Nigeria.</p>
                                <div class="social-links">
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                    <a href="#0"><i class="fab fa-behance"></i></a>
                                    <a href="#0"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-7">
                            <div class="footer-widget">
                                <h4 class="widget-title">Links</h4>
                                <div class="row">
                                    <div class="col-5 pr-10">
                                        <ul>
                                            <li><a href="{{ route('password.request') }}">Home</a></li>
                                            <li><a href="{{ route('password.request') }}">About</a></li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="gallery.html">Portfolio</a></li>
                                            <li><a href="#0">Pricing</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-7 pl-10">
                                        <ul>
                                            <li><a href="blog.html">News</a></li>
                                            <li><a href="#0">Press Release</a></li>
                                            <!-- <li><a href="case-service.html">Case Study</a></li>
                                            <li><a href="#0">Insigts</a></li>
                                            <li><a href="#0">Terms</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-sm-5 col-lg-3"> -->
                        <!-- <div class="footer-widget department">
                                <h4 class="widget-title">Department</h4>
                                <ul>
                                    <li><a href="service-details.html">Body Sergery</a></li>
                                    <li><a href="service-details.html">Major Operation</a></li>
                                    <li><a href="service-details.html">Child Care</a></li>
                                    <li><a href="service-details.html">Heart Operation</a></li>
                                    <li><a href="service-details.html">Instant Karma</a></li>
                                    <li><a href="service-details.html">PGO Theraphy</a></li>
                                </ul>
                            </div> -->
                        <!-- </div> -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                <p>Copyright By@ <span>PRINCETON HEALTH CARE LIMITED.</span> - 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 pl-0 pr-10">
                    <div class="opening-hour-box bg_img ml-none-10" data-overlay="94"
                        data-background="assets/images/bg/open-hour-bg.jpg">
                        <div class="opening-hour-top">
                            <div class="icon">
                                <img src="assets/images/icons/clock-icon-white.png" alt="">
                            </div>
                            <div class="content">
                                <h5 class="title">Opening Hours</h5>
                            </div>
                        </div>
                        <div class="opening-hour-list">
                            <ul>
                                <li>Monday - Friday<span>8:00 - 17:00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!--========= JS Here =========-->
    <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoint.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    @stack('scripts')
</body>

</html>
