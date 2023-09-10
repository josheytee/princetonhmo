@extends('layouts.main')

@section('content')
    <!-- Hero area start -->
    <section class="hero-area bg_img" data-background="assets/images/banner/01.jpg">
        <div class="container">
            <div class="row" style="position: relative;">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="title">
                            Health insurance<br>
                            for everyone
                            <span>.</span>
                        </h1>
                        {{-- <p>Sign up now to remove the worries about your employee’s or family’s health.</p> --}}
                        <div class="hero-buttons">
                            <a href="service-details.html" class="site-btn">Get Insured</a>
                            <a href="about.html" class="site-btn red">Request Qoute</a>
                        </div>
                    </div>
                </div>
                <div class="hero-ilustration-shape">
                    <img src="assets/images/uploads/doctor.png" alt=""
                        style="

                    right: 0;
                    top: -472px;
                ">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero area end -->

    <!-- feature area start -->
    <section class="feature-area pb-120">
        <div class="container feature-container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 text-center">
                    <div class="section-heading mb-70">
                        <h2 class="section-title shape">Our Plans</h2>
                        <p>STRESS-FREE HEALTH PLANS MADE FOR YOU.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-none-50">
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mt-50 text-center">
                    <div class="single-feature-box">
                        <div class="icon">
                            <img src="assets/images/uploads/black_male.png" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title">Individual Plan</h3>
                            <p>Get you and your family insured effortlessly.</p>
                            <a href="{{ route('pages.plans') }}" class="site-btn mt-3">Get Stated</a>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mt-50 text-center">
                    <div class="single-feature-box">
                        <div class="icon">
                            <img src="assets/images/uploads/corporate.png" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title">Corporate Plan</h3>
                            <p>Health insurance for your Organization</p>
                            <a href="{{ route('pages.corporate') }}" class="site-btn mt-3">Get Stated</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-8 mt-50 text-center">
                    <div class="single-feature-box">
                        <div class="icon">
                            <img src="assets/images/uploads/aged.png" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title">Aged Plan</h3>
                            <p>Get that peace of mind by ensuring they are insured as well.</p>
                            <a href="{{ route('pages.aged') }}" class="mt-3 site-btn">Get Stated</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature area end -->

    <!-- about area start -->
    <section class="about-area pb-160">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb-wrap">
                        <div class="about-thumb-small">
                            <img src="assets/images/uploads/welcome.jpg" alt="">
                        </div>
                        <div class="about-thumb-big">
                            <img src="assets/images/uploads/welcome2.jpg" alt="">
                        </div>
                        <div class="about-thumb-shape-big">
                            <img src="assets/images/icons/plus-icon-big.png" alt="">
                        </div>
                        <div class="about-thumb-shape-small">
                            <img src="assets/images/icons/plus-icon.png" alt="">
                        </div>
                        <div class="about-thumb-shape-circle">
                            <img src="assets/images/ilustration/circle-shpae.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content mt-50">
                        <div class="section-heading mb-55">
                            <h4 class="sub-title">About Us</h4>
                            <h2 class="section-title">WELCOME TO PRINCETON HEALTH LIMITED</h2>
                            <p>Princeton Health is a Health Maintenance Organization founded in 1999 by a group of
                                Nigerian Professionals from diverse backgrounds to operate as a Health Maintenance
                                Organization (HMO) in Nigeria.
                            </p>
                            <p>
                                We exist to ensure that everybody has access to qualitative medical care regardless of
                                their age, tribe, academic qualification or social status. We aim to inspire and promote
                                the image, lifestyle, and healthy living of our Clients by promptly responding to health
                                issues round the clock.</p>
                        </div>
                        <div class="about-list mt-none-20">
                            <div class="single-item d-flex align-items-center mt-20">
                                <div class="icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <span>PROMPT SERVICES</span>
                            </div>
                            <div class="single-item d-flex align-items-center mt-20">
                                <div class="icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <span>QUALITY HEALTH CARE</span>
                            </div>
                            <div class="single-item d-flex align-items-center mt-20">
                                <div class="icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <span>100+ HAPPY CLIENTS</span>
                            </div>
                            <div class="single-item d-flex align-items-center mt-20">
                                <div class="icon">
                                    <i class="fal fa-check"></i>
                                </div>
                                <span>AFFORDABLE HEALTH CARE</span>
                            </div>
                        </div>
                        <!-- <div class="about-founder d-flex align-items-center">
                                                                                                                                                                                    <div class="founder-detals d-flex align-items-center">
                                                                                                                                                                                        <div class="thumb">
                                                                                                                                                                                            <img src="assets/images/about/authore.png" alt="">
                                                                                                                                                                                        </div>
                                                                                                                                                                                        <div class="content">
                                                                                                                                                                                            <h4 class="name">Jemilin D. William</h4>
                                                                                                                                                                                            <span class="designation">Founder</span>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="founder-signature">
                                                                                                                                                                                        <img src="assets/images/about/signature.png" alt="">
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

    <!-- department area start -->
    <section class="department-area bg-2 pt-110 pb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 text-center">
                    <div class="section-heading mb-70">
                        <h2 class="section-title shape">Engagement Flow</h2>
                        <p>Its our duty to give our enrollees the very best</p>
                    </div>
                </div>
            </div>
            <div class="row mt-none-50">
                <div class="col-xl-3 col-lg-6 col-md-6 mt-50 text-center">
                    <div class="single-department">
                        <div class="thumb">
                            <img src="assets/images/uploads/register_.jpg" alt="">
                            <span class="count bg-1">01</span>
                        </div>
                        <div class="content">
                            <h4 class="title">Registration</h4>
                            {{-- <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiusmod tempor incid.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-50 text-center">
                    <div class="single-department small-box">
                        <div class="thumb">
                            <img src="assets/images/uploads/provider.jpg" alt="">
                            <span class="count bg-2">02</span>
                        </div>
                        <div class="content">
                            <h4 class="title">Select Choice or preferred Provider</h4>
                            {{-- <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiusmod tempor incid.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-50 text-center">
                    <div class="single-department">
                        <div class="thumb">
                            <img src="assets/images/uploads/identification.jpg" alt="">
                            <span class="count bg-3">03</span>
                        </div>
                        <div class="content">
                            <h4 class="title">Get Identification</h4>
                            {{-- <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiusmod tempor incid.
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mt-50 text-center">
                    <div class="single-department small-box">
                        <div class="thumb">
                            <img src="assets/images/uploads/access.jpg" alt="">
                            <span class="count bg-4">04</span>
                        </div>
                        <div class="content">
                            <h4 class="title">Access to Provider</h4>
                            {{-- <p>Lorem ipsum dolor sit amet, cons ectetur adipisicing elit, sed do eiusmod tempor incid.
                            </p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="appointment-box mt-80">
                        <div class="row">
                            <div class="col-xl-7 col-lg-10">
                                <div class="section-heading">
                                    <h4 class="sub-title">Make An Appointment</h4>
                                    <h2 class="section-title">Make An Appointment <br> Right Now<span>.</span></h2>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 my-auto text-right">
                                <a href="contact.html" class="site-btn">Make Appointment</a>
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
    <!-- department area end -->

    <!-- our-expert area start -->
    <!-- <section class="our-expert-area bg-2 pb-110">
                                                                                                                                                                <div class="container">
                                                                                                                                                                    <div class="row justify-content-center">
                                                                                                                                                                        <div class="col-lg-6 col-md-8 text-center">
                                                                                                                                                                            <div class="section-heading mb-70">
                                                                                                                                                                                <h2 class="section-title shape">Our Exparts</h2>
                                                                                                                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp
                                                                                                                                                                                    or incididunt ut labore et dolore magna aliqua.</p>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="row no-gutters expert-box-wrap">
                                                                                                                                                                        <div class="col-xl-6 col-lg-12">
                                                                                                                                                                            <div class="single-expert-box">
                                                                                                                                                                                <div class="expert-box-left">
                                                                                                                                                                                    <div class="thumb">
                                                                                                                                                                                        <img src="assets/images/team/team-1.jpg" alt="">
                                                                                                                                                                                        <span class="icon"><img src="assets/images/icons/icon-tablate.png" alt=""></span>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <h5 class="name">Rosalina Will.</h5>
                                                                                                                                                                                        <span class="designation">Founder</span>
                                                                                                                                                                                        <img src="assets/images/team/signature.png" alt="" class="signature">
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="expert-box-right">
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequ at. Duis aute irure dolor in reprehenderit in volutate velit esse cillum dolore.</p>
                                                                                                                                                                                        <div class="expert-box-buttons">
                                                                                                                                                                                            <a href="contact.html" class="site-btn white">Contact Now</a>
                                                                                                                                                                                            <span class="comments-btn"><i class="fal fa-comments"></i></span>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="col-xl-6 col-lg-12">
                                                                                                                                                                            <div class="single-expert-box">
                                                                                                                                                                                <div class="expert-box-left">
                                                                                                                                                                                    <div class="thumb">
                                                                                                                                                                                        <img src="assets/images/team/team-2.jpg" alt="">
                                                                                                                                                                                        <span class="icon"><img src="assets/images/icons/icon-tablate.png" alt=""></span>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <h5 class="name">Dambul Ph.</h5>
                                                                                                                                                                                        <span class="designation">Dentist</span>
                                                                                                                                                                                        <img src="assets/images/team/signature.png" alt="" class="signature">
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="expert-box-right">
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequ at. Duis aute irure dolor in reprehenderit in volutate velit esse cillum dolore.</p>
                                                                                                                                                                                        <div class="expert-box-buttons">
                                                                                                                                                                                            <a href="contact.html" class="site-btn white">Contact Now</a>
                                                                                                                                                                                            <span class="comments-btn"><i class="fal fa-comments"></i></span>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="col-xl-6 col-lg-12">
                                                                                                                                                                            <div class="single-expert-box">
                                                                                                                                                                                <div class="expert-box-left">
                                                                                                                                                                                    <div class="thumb">
                                                                                                                                                                                        <img src="assets/images/team/team-3.jpg" alt="">
                                                                                                                                                                                        <span class="icon"><img src="assets/images/icons/icon-tablate.png" alt=""></span>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <h5 class="name">Rosalina Will..</h5>
                                                                                                                                                                                        <span class="designation">Founder</span>
                                                                                                                                                                                        <img src="assets/images/team/signature.png" alt="" class="signature">
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="expert-box-right">
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequ at. Duis aute irure dolor in reprehenderit in volutate velit esse cillum dolore.</p>
                                                                                                                                                                                        <div class="expert-box-buttons">
                                                                                                                                                                                            <a href="contact.html" class="site-btn white">Contact Now</a>
                                                                                                                                                                                            <span class="comments-btn"><i class="fal fa-comments"></i></span>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="col-xl-6 col-lg-12">
                                                                                                                                                                            <div class="single-expert-box">
                                                                                                                                                                                <div class="expert-box-left">
                                                                                                                                                                                    <div class="thumb">
                                                                                                                                                                                        <img src="assets/images/team/team-4.jpg" alt="">
                                                                                                                                                                                        <span class="icon"><img src="assets/images/icons/icon-tablate.png" alt=""></span>
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <h5 class="name">Rosalina Will.</h5>
                                                                                                                                                                                        <span class="designation">Founder</span>
                                                                                                                                                                                        <img src="assets/images/team/signature.png" alt="" class="signature">
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="expert-box-right">
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisi cing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequ at. Duis aute irure dolor in reprehenderit in volutate velit esse cillum dolore.</p>
                                                                                                                                                                                        <div class="expert-box-buttons">
                                                                                                                                                                                            <a href="contact.html" class="site-btn white">Contact Now</a>
                                                                                                                                                                                            <span class="comments-btn"><i class="fal fa-comments"></i></span>
                                                                                                                                                                                        </div>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </section> -->
    <!-- our-expert area end -->

    <!-- core feature area start -->
    <!-- <section class="core-feature-area pt-110 pb-110">
                                                                                                                                                                <div class="container">
                                                                                                                                                                    <div class="row mb-70">
                                                                                                                                                                        <div class="col-lg-6">
                                                                                                                                                                            <div class="section-heading">
                                                                                                                                                                                <h2 class="section-title">Core Features</h2>
                                                                                                                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp
                                                                                                                                                                                    or incididunt ut labore et dolore magna aliqua.</p>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                        <div class="col-lg-4 offset-lg-2 my-auto text-right">
                                                                                                                                                                            <a href="about.html" class="site-btn white">Learn More</a>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                    <div class="row">
                                                                                                                                                                        <div class="col-lg-12">
                                                                                                                                                                            <div class="feature-carousel owl-carousel">
                                                                                                                                                                                <div class="singel-core-feature-box text-center">
                                                                                                                                                                                    <div class="icon">
                                                                                                                                                                                        <img src="assets/images/icons/feature-icon-04.png" alt="">
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <h3 class="title">24/7 Ambulance Trans</h3>
                                                                                                                                                                                        <span class="shape"><img src="assets/images/ilustration/shape.png" alt=""></span>
                                                                                                                                                                                        <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                                                                                                                                        aliqua nim ad minim.</p>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="singel-core-feature-box text-center">
                                                                                                                                                                                    <div class="icon">
                                                                                                                                                                                        <img src="assets/images/icons/feature-icon-05.png" alt="">
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <h3 class="title">Research & Test</h3>
                                                                                                                                                                                        <span class="shape"><img src="assets/images/ilustration/shape.png" alt=""></span>
                                                                                                                                                                                        <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                                                                                                                                        aliqua nim ad minim.</p>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="singel-core-feature-box text-center">
                                                                                                                                                                                    <div class="icon">
                                                                                                                                                                                        <img src="assets/images/icons/feature-icon-06.png" alt="">
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <h3 class="title">Make Appointment</h3>
                                                                                                                                                                                        <span class="shape"><img src="assets/images/ilustration/shape.png" alt=""></span>
                                                                                                                                                                                        <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                                                                                                                                        aliqua nim ad minim.</p>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="singel-core-feature-box text-center">
                                                                                                                                                                                    <div class="icon">
                                                                                                                                                                                        <img src="assets/images/icons/feature-icon-04.png" alt="">
                                                                                                                                                                                    </div>
                                                                                                                                                                                    <div class="content">
                                                                                                                                                                                        <h3 class="title">24/7 Ambulance Trans</h3>
                                                                                                                                                                                        <span class="shape"><img src="assets/images/ilustration/shape.png" alt=""></span>
                                                                                                                                                                                        <p>Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                                                                                                                                                                        aliqua nim ad minim.</p>
                                                                                                                                                                                    </div>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </section> -->
    <!-- core feature area end -->

    <!-- contact area start -->
    {{-- <div class="contact-area pt-110 pb-110 bg_img" data-overlay="94"
        data-background="https://princetonhmo.net/wp-content/uploads/2019/08/logo_princeon.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-buttons">
                        <ul class="nav text-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="appointment-tab" data-toggle="tab"
                                    href="#appointment" role="tab" aria-controls="appointment"
                                    aria-selected="true">Make Appointment</a>
                            </li>
                            <!-- <li class="nav-item">
                                                                <a class="nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab"
                                                                    aria-controls="emergency" aria-selected="false">For Emergency</a>
                                                            </li> -->
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="appointment" role="tabpanel"
                                    aria-labelledby="appointment-tab">
                                    <div class="contact-form">
                                        <form action="index.html">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Enter your name">
                                                        <span class="icon"><i class="fal fa-user"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Enter your email">
                                                        <span class="icon"><i class="fal fa-envelope"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Enter age">
                                                        <span class="icon"><i class="fal fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <input type="tel" placeholder="Enter your phone number">
                                                        <span class="icon"><i class="fal fa-phone"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <input type='text' class='has-icon datepicker-here'
                                                            data-language='en' placeholder="Select Date">
                                                        <span class="icon"><i class="fal fa-calendar-alt"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Select Time">
                                                        <span class="icon"><i class="fal fa-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <select name="subject">
                                                            <option data-display="Select Department">Select Department
                                                            </option>
                                                            <option value="1">Body Sergery</option>
                                                            <option value="2">Major Operation</option>
                                                            <option value="3">Child Care</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group dr">
                                                        <select name="subject">
                                                            <option data-display="Select Expert/Doctor">Select
                                                                Expert/Doctor</option>
                                                            <option value="1">Dr. Dambul Ph</option>
                                                            <option value="2">Dr. Rosalina Will</option>
                                                            <option value="3">Dr. Jemilin D. William</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <textarea placeholder="Your message"></textarea>
                                                        <span class="icon"><i class="fal fa-edit"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-4 text-center">
                                                    <a href="contact.html" class="site-btn red">Make An
                                                        Appointment</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="tab-pane fade" id="emergency" role="tabpanel" aria-labelledby="emergency-tab">
                                                                    <div class="contact-form">
                                                                        <form action="index.html">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group">
                                                                                        <input type="text" placeholder="Enter your name">
                                                                                        <span class="icon"><i class="fal fa-user"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-5">
                                                                                    <div class="form-group">
                                                                                        <input type="text" placeholder="Enter your email">
                                                                                        <span class="icon"><i class="fal fa-envelope"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-3">
                                                                                    <div class="form-group">
                                                                                        <input type="text" placeholder="Enter age">
                                                                                        <span class="icon"><i class="fal fa-calendar"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group">
                                                                                        <input type="tel" placeholder="Enter your phone number">
                                                                                        <span class="icon"><i class="fal fa-phone"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group">
                                                                                        <input type='text' class='has-icon datepicker-here' data-language='en' placeholder="Select Date">
                                                                                        <span class="icon"><i class="fal fa-calendar-alt"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group">
                                                                                        <input type="text" placeholder="Select Time">
                                                                                        <span class="icon"><i class="fal fa-clock"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <select name="subject">
                                                                                            <option data-display="Select Department">Select Department</option>
                                                                                            <option value="1">Body Sergery</option>
                                                                                            <option value="2">Major Operation</option>
                                                                                            <option value="3">Child Care</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="form-group">
                                                                                        <select name="subject">
                                                                                            <option data-display="Select Expert/Doctor">Select Expert/Doctor</option>
                                                                                            <option value="1">Dr. Dambul Ph</option>
                                                                                            <option value="2">Dr. Rosalina Will</option>
                                                                                            <option value="3">Dr. Jemilin D. William</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <textarea placeholder="Your message"></textarea>
                                                                                        <span class="icon"><i class="fal fa-edit"></i></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row justify-content-center">
                                                                                <div class="col-lg-4 text-center">
                                                                                    <a href="contact.html" class="site-btn red">Make An Appointment</a>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- contact area end -->

    <!-- video section start -->
    <!-- <section class="video-area bg_img pt-160 pb-160" data-overlay="94" data-background="assets/images/bg/video-bg.jpg">
                                                                                                                                                                <div class="container">
                                                                                                                                                                    <div class="row">
                                                                                                                                                                        <div class="col-lg-12">
                                                                                                                                                                            <div class="video-content text-center">
                                                                                                                                                                                <div class="video-button-trigger">
                                                                                                                                                                                    <a href="//www.youtube.com/embed/4xe72U7mXNg?rel=0&amp;controls=0&amp;showinfo=0" class="video-btn"
                                                                                                                                                                                        data-rel="lightcase:myCollection"><i class="fa fa-play"></i></a>
                                                                                                                                                                                    <span class="intro">Intro Video</span>
                                                                                                                                                                                </div>
                                                                                                                                                                                <div class="section-heading">
                                                                                                                                                                                    <h2 class="section-title">Clinical Investigators, Physicians, Pharmacists
                                                                                                                                                                                    Nurses, or Patients & Caregiver.</h2>
                                                                                                                                                                                </div>
                                                                                                                                                                            </div>
                                                                                                                                                                        </div>
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                                <div class="video-shape">
                                                                                                                                                                    <span><img src="assets/images/icons/video-icon-01.png" alt=""></span>
                                                                                                                                                                    <span><img src="assets/images/icons/video-icon-02.png" alt=""></span>
                                                                                                                                                                </div>
                                                                                                                                                            </section> -->
    <!-- video section end -->

    <!-- sponser area start -->
    <div class="sponser-area pt-100 pb-100">
        <div class="container-fluid">
            <div class="row no-gutters">
                <div class="col-lg-12">
                    <div class="brand-carousel owl-carousel">
                        <div class="singel-brand-item">
                            <img src="assets/images/uploads/clients/cropped-GnM-LOGO.png" alt="">
                        </div>
                        <div class="singel-brand-item">
                            <img src="assets/images/uploads/clients/Drivers-Plus-logo-wr.png" alt="">
                        </div>
                        <div class="singel-brand-item">
                            <img src="assets/images/uploads/clients/apollos.jpeg" alt="">
                        </div>
                        <div class="singel-brand-item">
                            <img src="assets/images/uploads/clients/dursnte_fishery.png" alt="">
                        </div>
                        <div class="singel-brand-item">
                            <img src="assets/images/uploads/clients/pentagon.png" alt="">
                        </div>
                        <div class="singel-brand-item">
                            <img src="assets/images/uploads/clients/grooming.png" alt="">
                        </div>
                        <div class="singel-brand-item">
                            <img src="assets/images/uploads/clients/iis.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sponser area end -->

    <!-- news area start -->
    {{-- <section class="news-area bg-2 pt-110 pb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 text-center">
                    <div class="section-heading mb-70">
                        <h2 class="section-title shape">News Feeds</h2>
                        <p>WHATS GOOD FOR YOU</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-none-30">
                <div class="col-xl-4 col-lg-6 col-sm-12 mt-30">
                    <div class="single-news-box">
                        <div class="thumb">
                            <img src="assets/images/blog/01.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="news-meta-date">
                                <span>23</span>
                                Mar
                            </div>
                            <div class="news-meta">
                                <ul>
                                    <li><a href="#0"><i class="fal fa-user"></i> Rosali D.</a></li>
                                    <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th Feb 2020</a></li>
                                </ul>
                            </div>
                            <h4 class="title"><a href="blog-details.html">The Medical Department Is
                                    Comprised Of Medical.</a></h4>
                            <a href="blog-details.html" class="inline-btn">Read More</a>
                            <span class="count">01</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12 mt-30">
                    <div class="single-news-box">
                        <div class="thumb">
                            <img src="assets/images/blog/02.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="news-meta-date">
                                <span>10</span>
                                Feb
                            </div>
                            <div class="news-meta">
                                <ul>
                                    <li><a href="#0"><i class="fal fa-user"></i> Rosali D.</a></li>
                                    <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th Feb 2020</a></li>
                                </ul>
                            </div>
                            <h4 class="title"><a href="blog-details.html">With In-depth Experience In
                                    Broad Range Of Disease.</a></h4>
                            <a href="blog-details.html" class="inline-btn">Read More</a>
                            <span class="count">02</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12 mt-30">
                    <div class="single-news-box">
                        <div class="thumb">
                            <img src="assets/images/blog/03.jpg" alt="">
                        </div>
                        <div class="content">
                            <div class="news-meta-date">
                                <span>04</span>
                                Mar
                            </div>
                            <div class="news-meta">
                                <ul>
                                    <li><a href="#0"><i class="fal fa-user"></i> Rosali D.</a></li>
                                    <li><a href="#0"><i class="fal fa-calendar-alt"></i> 24th Feb 2020</a></li>
                                </ul>
                            </div>
                            <h4 class="title"><a href="blog-details.html">Experience In A Broad Range
                                    of disease states.</a></h4>
                            <a href="blog-details.html" class="inline-btn">Read More</a>
                            <span class="count">03</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- news area end -->
@endsection
