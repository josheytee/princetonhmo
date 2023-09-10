@extends('layouts.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8" data-background="assets/images/uploads/corporate_bg.jpg">
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
                        <h1 class="back-title">Corporate</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <section class="appointment-area appointment-area-2">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="appointment-box appointment-box-2">

                        <div class="row">

                            <div class="col-xl-7 col-lg-10">

                                <div class="section-heading">

                                    <h4 class="sub-title">Get A Quote</h4>
                                    <h2 class="section-title">Get a Qoute<br> Right Now<span>.</span></h2>

                                </div>

                            </div>

                            <div class="col-xl-3 col-lg-6 my-auto text-right">

                                <a href="{{ route('pages.quote') }}" class="site-btn">Get Quote</a>
                            </div>

                        </div>

                        <div class="appointment-ilustration">

                            <img src="assets/images/uploads/appointment.png" alt="">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="service-area pt-120 pb-120 bg_img" data-overlay="94"
        data-background="assets/images/uploads/corporate_chairs.jpg"
        style="background-image: url(&quot;assets/images/uploads/corporate_chairs.jpg&quot;);">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8 text-center">

                    <div class="section-heading mb-70">

                        <h4 class="sub-title">Services</h4>
                        <h2 class="section-title" style="color: white;">Our Coorporate Plan is not limited to<span>.</span>
                        </h2>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="col-lg-12">

                    <ul class="nav service-tab" role="tablist">

                        <li class="nav-item">

                            <a class="nav-link" href="#tab-1" role="tab" data-toggle="tab">

                                <span class="icon">

                                    <img class="default" src="assets/images/uploads/i/payment-icon.png" alt="">
                                    <img class="hover" src="assets/images/uploads/i/payment-hover.png" alt="">

                                </span>

                                <span class="title">Flexible payments</span>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#tab-2" role="tab" data-toggle="tab">

                                <span class="icon">

                                    <img class="default" src="assets/images/uploads/i/customer-care-icon.png"
                                        alt="">
                                    <img class="hover" src="assets/images/uploads/i/customer-care-hover.png"
                                        alt="">

                                </span>

                                <span class="title">24/7 customer care</span>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#tab-3" role="tab" data-toggle="tab">

                                <span class="icon">
                                    <img class="default" src="assets/images/uploads/i/benefit-icon.png" alt="">
                                    <img class="hover" src="assets/images/uploads/i/benefit-hover.png" alt="">

                                </span>

                                <span class="title">Unlock more benefits</span>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#tab-4" role="tab" data-toggle="tab">

                                <span class="icon">
                                    <img class="default" src="assets/images/uploads/i/hospital-icon.png" alt="">
                                    <img class="hover" src="assets/images/uploads/i/hospital-hover.png" alt="">


                                </span>

                                <span class="title">Best hospitals near you</span>

                            </a>

                        </li>

                        {{-- <li class="nav-item">

                            <a class="nav-link" href="#tab-5" role="tab" data-toggle="tab">

                                <span class="icon">

                                    <img class="default" src="assets/images/service/service-icon-05.png" alt="">

                                    <img class="hover" src="assets/images/service/service-icon-hover-05.png"
                                        alt="">

                                </span>

                                <span class="title">Kidney Solution</span>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="#tab-6" role="tab" data-toggle="tab">

                                <span class="icon">

                                    <img class="default" src="assets/images/service/service-icon-06.png" alt="">

                                    <img class="hover" src="assets/images/service/service-icon-hover-06.png"
                                        alt="">

                                </span>

                                <span class="title">Blood Test</span>

                            </a>

                        </li> --}}

                    </ul>

                </div>

                <div class="col-lg-12">

                    <div class="tab-content service-tab-content mt-60">

                        <div role="tabpanel" class="tab-pane fade in active show" id="tab-1">

                            <div class="row">

                                <div class="col-lg-5">

                                    <div class="service-box-thumb">

                                        <div class="service-big">

                                            {{-- <img src="assets/images/service/service-01.jpeg" alt=""> --}}
                                            <img src="assets/images/uploads/executive.jpg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-big.png" alt="">

                                            </span>

                                        </div>

                                        <div class="service-small">

                                            <img src="assets/images/uploads/corporate.png" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-small.png"
                                                    alt="">

                                            </span>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-7 my-auto">

                                    <div class="service-box-content">

                                        <div class="section-heading">

                                            <h4 class="sub-title">Corporate Plan</h4>

                                            <h2 class="section-title">Affordable Health Insurance For Corporates &
                                                SMEs<span>.</span></h2>

                                        </div>

                                        <p>An Healty employee makes a healthier business. Get a well tailored insurance for
                                            your
                                            employees</p>
                                        <a href="{{ route('pages.quote') }}" class="site-btn transparent">Get a Quote</a>


                                    </div>

                                </div>

                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab-2">

                            <div class="row">

                                <div class="col-lg-5">

                                    <div class="service-box-thumb">

                                        <div class="service-big">

                                            <img src="assets/images/service/service-01.jpeg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-big.png" alt="">

                                            </span>

                                        </div>

                                        <div class="service-small">

                                            <img src="assets/images/service/service-02.jpeg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-small.png"
                                                    alt="">

                                            </span>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-7 my-auto">

                                    <div class="service-box-content">

                                        <div class="section-heading mb-50">

                                            <h4 class="sub-title">Medical checkup</h4>

                                            <h2 class="section-title">Dr. Stephanie Wosniack is

                                                is dedicated to providing<span>.</span></h2>

                                        </div>

                                        <p>Dr. Stephanie Wosniack is is dedicated to providing her patients with the best

                                            possible care. We at

                                            MediCare are focused

                                            on helping you. After receiving successful care for various aches and pains over

                                            the years, Dr. Woshiack

                                            found her

                                            calling to help others get well.</p>

                                        <a href="contact.html" class="site-btn transparent">Get Appointment</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab-3">

                            <div class="row">

                                <div class="col-lg-5">

                                    <div class="service-box-thumb">

                                        <div class="service-big">

                                            <img src="assets/images/service/service-01.jpeg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-big.png" alt="">

                                            </span>

                                        </div>

                                        <div class="service-small">

                                            <img src="assets/images/service/service-02.jpeg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-small.png"
                                                    alt="">

                                            </span>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-7 my-auto">

                                    <div class="service-box-content">

                                        <div class="section-heading mb-50">

                                            <h4 class="sub-title">Corona Checkup</h4>

                                            <h2 class="section-title">Dr. Stephanie Wosniack is

                                                is dedicated to providing<span>.</span></h2>

                                        </div>

                                        <p>Dr. Stephanie Wosniack is is dedicated to providing her patients with the best

                                            possible care. We at

                                            MediCare are focused

                                            on helping you. After receiving successful care for various aches and pains over

                                            the years, Dr. Woshiack

                                            found her

                                            calling to help others get well.</p>

                                        <a href="contact.html" class="site-btn transparent">Get Appointment</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab-4">

                            <div class="row">

                                <div class="col-lg-5">

                                    <div class="service-box-thumb">

                                        <div class="service-big">

                                            <img src="assets/images/service/service-01.jpeg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-big.png" alt="">

                                            </span>

                                        </div>

                                        <div class="service-small">

                                            <img src="assets/images/service/service-02.jpeg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-small.png"
                                                    alt="">

                                            </span>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-7 my-auto">

                                    <div class="service-box-content">

                                        <div class="section-heading mb-50">

                                            <h4 class="sub-title">Pro Dental</h4>

                                            <h2 class="section-title">Dr. Stephanie Wosniack is

                                                is dedicated to providing<span>.</span></h2>

                                        </div>

                                        <p>Dr. Stephanie Wosniack is is dedicated to providing her patients with the best

                                            possible care. We at

                                            MediCare are focused

                                            on helping you. After receiving successful care for various aches and pains over

                                            the years, Dr. Woshiack

                                            found her

                                            calling to help others get well.</p>

                                        <a href="contact.html" class="site-btn transparent">Get Appointment</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab-5">

                            <div class="row">

                                <div class="col-lg-5">

                                    <div class="service-box-thumb">

                                        <div class="service-big">

                                            <img src="assets/images/service/service-01.jpeg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-big.png" alt="">

                                            </span>

                                        </div>

                                        <div class="service-small">

                                            <img src="assets/images/service/service-02.jpeg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-small.png"
                                                    alt="">

                                            </span>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-7 my-auto">

                                    <div class="service-box-content">

                                        <div class="section-heading mb-50">

                                            <h4 class="sub-title">Kidney Solution</h4>

                                            <h2 class="section-title">Dr. Stephanie Wosniack is

                                                is dedicated to providing<span>.</span></h2>

                                        </div>

                                        <p>Dr. Stephanie Wosniack is is dedicated to providing her patients with the best

                                            possible care. We at

                                            MediCare are focused

                                            on helping you. After receiving successful care for various aches and pains over

                                            the years, Dr. Woshiack

                                            found her

                                            calling to help others get well.</p>

                                        <a href="contact.html" class="site-btn transparent">Get Appointment</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab-6">

                            <div class="row">

                                <div class="col-lg-5">

                                    <div class="service-box-thumb">

                                        <div class="service-big">

                                            <img src="assets/images/service/service-01.jpeg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-big.png" alt="">

                                            </span>

                                        </div>

                                        <div class="service-small">

                                            <img src="assets/images/service/service-02.jpeg" alt="">

                                            <span class="shape">

                                                <img src="assets/images/ilustration/service-shape-small.png"
                                                    alt="">

                                            </span>

                                        </div>

                                    </div>

                                </div>

                                <div class="col-lg-7 my-auto">

                                    <div class="service-box-content">

                                        <div class="section-heading mb-50">

                                            <h4 class="sub-title">Blood Test</h4>

                                            <h2 class="section-title">Dr. Stephanie Wosniack is

                                                is dedicated to providing<span>.</span></h2>

                                        </div>

                                        <p>Dr. Stephanie Wosniack is is dedicated to providing her patients with the best

                                            possible care. We at

                                            MediCare are focused

                                            on helping you. After receiving successful care for various aches and pains over

                                            the years, Dr. Woshiack

                                            found her

                                            calling to help others get well.</p>

                                        <a href="contact.html" class="site-btn transparent">Get Appointment</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- about area start -->
    {{-- <section class="about-area about-area-2 about-area-3 pt-130 pb-145">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb-wrap about-thumb-wrap-3 mt-60">
                        <div class="about-thumb-big">
                            <div class="about-thumb-small">
                                <img src="https://princetonhmo.net/wp-content/uploads/2019/08/logo_princeon.png"
                                    alt="">
                            </div>
                            <img src="assets/images/uploads/executive.jpg" alt="">
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
                            <h2 class="section-title">Affordable Health Insurance For Corporates & SMEs</h2>
                            <p>An Healty employee makes a healthier business. Get a well tailored insurance for your
                                employees</p>
                        </div>
                        <a href="{{ route('pages.quote') }}" class="site-btn transparent">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- about area end -->

    <!-- service area start -->
    {{-- <section class="service-area service-area-2 service-area-3 pt-100 pb-100">
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
    </section> --}}
    <!-- service area end -->

    <div class="sponser-area pt-100 pb-100">

        <div class="container-fluid">

            <div class="row no-gutters">

                <div class="col-lg-12">

                    <div class="brand-carousel owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-3041px, 0px, 0px); transition: all 0.8s ease 0s; width: 4868px;">
                                <div class="owl-item cloned" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/02.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/03.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/04.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/05.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/01.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/01.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/02.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/03.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/04.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/05.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/01.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/01.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/02.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/03.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/04.png" alt="">

                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 274.2px; margin-right: 30px;">
                                    <div class="singel-brand-item">

                                        <img src="assets/images/sponsor/05.png" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled">
                            <div class="owl-prev"><i class="fal fa-angle-left"></i></div>
                            <div class="owl-next"><i class="fal fa-angle-right"></i></div>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="appointment-box mt-80">
                    <div class="row">
                        <div class="col-xl-7 col-lg-10">
                            <div class="section-heading">
                                <h4 class="sub-title">Get a Qoute</h4>
                                <h2 class="section-title">Get a Qoute <br> Right Now<span>.</span></h2>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 my-auto text-right">
                            <a href="{{ route('pages.quote') }}" class="site-btn">Get Quote</a>
                        </div>
                    </div>
                    <div class="appointment-ilustration">
                        <img src="assets/images/uploads/appointment.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
