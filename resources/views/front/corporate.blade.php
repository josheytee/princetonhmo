@extends('layouts.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8" data-background="assets/images/uploads/banner.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2 class="title">Corporate Plans</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Corporate</li>
                        </ul>
                        <h1 class="back-title">Plans</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- about area start -->
    <section class="about-area about-area-2 about-area-3 pt-130 pb-145">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb-wrap about-thumb-wrap-3 mt-60">
                        <div class="about-thumb-big">
                            <div class="about-thumb-small">
                                <img src="https://princetonhmo.net/wp-content/uploads/2019/08/logo_princeon.png"
                                    alt="">
                            </div>
                            <img src="assets/images/uploads/corporate.png" alt="">
                            <span class="shape">
                                <img src="assets/images/about/shape.png" alt="">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content about-content-3">
                        <div class="section-heading mb-35">
                            <!-- <h4 class="sub-title">About Us</h4> -->
                            <h2 class="section-title">Affordable Health Insurance For Corporates & SMEs</p>
                        </div>
                        <a href="{{ route('pages.quote') }}" class="site-btn transparent">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- service area start -->
    <section class="service-area service-area-2 service-area-3 pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section-heading mb-60">
                        <!-- <h4 class="sub-title">Services</h4> -->
                        <h2 class="section-title">Sign up your company in minutes </h2>
                    </div>
                </div>
            </div>

            <div class="row mt-none-30 text-center">
                <div class="col-xl-3 col-lg-6 col-md-12 mt-30">
                    <div class="single-service-box">
                        <div class="icon" style="font-size: 30px;">
                            <i class="fas fa-credit-card"></i>
                            <!-- <img src="assets/images/service/service-2-icon-1.png" alt=""> -->
                        </div>
                        <div class="content">
                            <h4 class="title">Flexible payments</h4>
                            <p>Pay monthly, quarterly or annually.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 mt-30">
                    <div class="single-service-box">
                        <div class="icon" style="font-size: 30px;">
                            <!-- <img src="assets/images/service/service-2-icon-2.png" alt=""> -->
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="content">
                            <h4 class="title">24/7 customer care</h4>
                            <p>Zero wait times. You can always rely on us to be reachable at anytime of the day, every day
                                of the week.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 mt-30">
                    <div class="single-service-box">
                        <div class="icon" style="font-size: 30px;">
                            <i class="fas fa-chart-line"></i>
                            <!-- <img src="assets/images/service/service-2-icon-3.png" alt=""> -->
                        </div>
                        <div class="content">
                            <h4 class="title">Unlock more benefits</h4>
                            <p>We increase your health benefits every quarter and we won’t increase the price. Read how our
                                graduated benefits work. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-12 mt-30">
                    <div class="single-service-box">
                        <div class="icon" style="font-size: 30px;">
                            <i class="fas fa-hospital"></i>
                            <!-- <img src="assets/images/service/service-2-icon-4.png" alt=""> -->
                        </div>
                        <div class="content">
                            <h4 class="title">Best hospitals near you</h4>
                            <p>We're partners with over 1,500 hospitals across Nigeria which means no matter where you are,
                                you can get access to good quality healthcare. See our hospital list.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- service area end -->

    <!-- counter area start -->
    <!-- <section class="counter-area pt-100 pb-100">
                                                                                                                        <div class="container">
                                                                                                                            <div class="row">
                                                                                                                                <div class="col-lg-12">
                                                                                                                                    <div class="counter-area-wrap">
                                                                                                                                        <div class="counter-wrap">
                                                                                                                                            <div class="single-counter-box pb-50">
                                                                                                                                                <div class="icon">
                                                                                                                                                    <img src="assets/images/icons/experience-icon-01.png" alt="">
                                                                                                                                                </div>
                                                                                                                                                <div class="content">
                                                                                                                                                    <h2 class="title"><span class="counter">51</span>%</h2>
                                                                                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                                                                                                                                    </p>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="single-counter-box pb-50">
                                                                                                                                                <div class="icon">
                                                                                                                                                    <img src="assets/images/icons/experience-icon-01.png" alt="">
                                                                                                                                                </div>
                                                                                                                                                <div class="content">
                                                                                                                                                    <h2 class="title"><span class="counter">51</span>%</h2>
                                                                                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                                                                                                                                    </p>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="single-counter-box pt-60">
                                                                                                                                                <div class="icon">
                                                                                                                                                    <img src="assets/images/icons/experience-icon-03.png" alt="">
                                                                                                                                                </div>
                                                                                                                                                <div class="content">
                                                                                                                                                    <h2 class="title"><span class="counter">100</span>%</h2>
                                                                                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                                                                                                                                    </p>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                            <div class="single-counter-box pt-60">
                                                                                                                                                <div class="icon">
                                                                                                                                                    <img src="assets/images/icons/experience-icon-04.png" alt="">
                                                                                                                                                </div>
                                                                                                                                                <div class="content">
                                                                                                                                                    <h2 class="title"><span class="counter">10</span>%</h2>
                                                                                                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
                                                                                                                                                    </p>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </section> -->
    <!-- counter area end -->

    <!-- pricing area start -->
    <section class="pricing-area pt-120 pb-120 bg-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-heading mb-70">
                        <h4 class="sub-title">pricing</h4>
                        <h2 class="section-title">Price & Plans<span>.</span></h2>
                    </div>
                </div>
            </div>
            <div class="row mt-none-30 align-items-center no-gutters">
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                    <div class="single-pricing-box bg_img active" data-overlay="94"
                        data-background="assets/images/bg/pricing-bg-01.jpeg">
                        <div class="pricing-head">
                            <h4 class="title">Basic</h4>
                            <h2 class="price"><span>$</span>99</h2>
                            <h6 class="duration">Monthly</h6>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>Routine checkup<i class="fal fa-check"></i></li>
                                <li>24h Assisance<i class="fal fa-check"></i></li>
                                <li>100 Tests & Treatments<i class="fal fa-check"></i></li>
                                <li>Regular Health Checkups<i class="fal fa-check"></i></li>
                                <li>Blood Test<i class="fal fa-check"></i></li>
                            </ul>
                        </div>
                        <a href="{{ route('pages.cart') }}" class="site-btn transparent">Make Payment</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                    <div class="single-pricing-box ">
                        <div class="pricing-head">
                            <h4 class="title">Basic</h4>
                            <h2 class="price"><span>$</span>199</h2>
                            <h6 class="duration">Monthly</h6>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>Routine checkup<i class="fal fa-check"></i></li>
                                <li>24h Assisance<i class="fal fa-check"></i></li>
                                <li>100 Tests & Treatments<i class="fal fa-check"></i></li>
                                <li>Regular Health Checkups<i class="fal fa-check"></i></li>
                                <li>Blood Test<i class="fal fa-check"></i></li>
                                <li>Kidney Test<i class="fal fa-check"></i></li>
                            </ul>
                        </div>
                        <a href="#0" class="site-btn transparent">Make Payment</a>
                        <div class="shape">
                            <img src="assets/images/icons/pricing-icon.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mt-30">
                    <div class="single-pricing-box">
                        <div class="pricing-head">
                            <h4 class="title">Basic</h4>
                            <h2 class="price"><span>$</span>59</h2>
                            <h6 class="duration">Monthly</h6>
                        </div>
                        <div class="pricing-list">
                            <ul>
                                <li>Routine checkup<i class="fal fa-check"></i></li>
                                <li>24h Assisance<i class="fal fa-check"></i></li>
                                <li>100 Tests & Treatments<i class="fal fa-check"></i></li>
                                <li>Regular Health Checkups<i class="fal fa-check"></i></li>
                                <li>Blood Test<i class="fal fa-check"></i></li>
                            </ul>
                        </div>
                        <a href="#0" class="site-btn transparent">Make Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- pricing area end -->
@endsection
