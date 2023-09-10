@extends('layouts.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8" data-background="assets/images/uploads/quote.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2 class="title">Quote</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Quote</li>
                        </ul>
                        <h1 class="back-title">Quote</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->

    <!-- contact area start -->
    <div class="contact-area pt-110 pb-110 bg_img" data-overlay="94"
        data-background="https://princetonhmo.net/wp-content/uploads/2019/08/logo_princeon.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-buttons">
                        {{-- <ul class="nav text-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="appointment-tab" data-toggle="tab" href="#appointment"
                                    role="tab" aria-controls="appointment" aria-selected="true">Enrollee Form
                                    (Individual)</a>
                            </li>
                            <!-- <li class="nav-item">
                                                <a class="nav-link" id="emergency-tab" data-toggle="tab" href="#emergency" role="tab"
                                                    aria-controls="emergency" aria-selected="false">For Emergency</a>
                                            </li> -->
                        </ul> --}}
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="appointment" role="tabpanel"
                                    aria-labelledby="appointment-tab">
                                    <div class="contact-form-touch">
                                        <div class="section-title">
                                            <h2 class="title">Kindly fill the form below to get started.</h2>
                                        </div>
                                        <div class="contact-form-getin mt-35">
                                            <form action="index.html">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="state" id="state-label">Your Firstname:</label>
                                                            <input type="text" name="mail" id="state">
                                                            <span><i class="fal fa-user"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="state" id="state-label">Your Lastname:</label>
                                                            <input type="text" name="mail" id="state">
                                                            <span><i class="fal fa-user"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="email" id="email-label">Your Work Email: </label>
                                                            <input type="email" name="mail" id="email"
                                                                placeholder="sokilainfo@gmail.com">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="address" id="address-label"> Your Phone
                                                                Number:</label>
                                                            <input type="text" name="mail" id="address">
                                                            <span><i class="fal fa-phone"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="state" id="state-label">State:</label>
                                                            <input type="text" name="state" id="state"
                                                                placeholder="sokilainfo@gmail.com">
                                                            <span><i class="fal fa-chess-board"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="fullname" id="fullname-label">Company Name </label>
                                                            <input type="text" name="name" id="fullname"
                                                                placeholder="Sokila DJ Maxien">
                                                            <span><i class="fal fa-building"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="address" id="address-label">Company Address</label>
                                                            <input type="text" name="mail" id="address">
                                                            <span><i class="fal fa-building"></i></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="state" id="state-label">Is this your company’s
                                                                first time getting health insurance?</label>
                                                            <input type="text" name="mail" id="state">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="email" id="email-label">Staff strength:</label>
                                                            <input type="text" name="mail" id="email">
                                                            <span>
                                                                <i class="fal fa-sort-numeric-up"></i></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="messages" id="messages-label">Comments:</label>
                                                            <textarea name="message" id="messages" placeholder="Write here"></textarea>
                                                            <span><i class="fal fa-pen-alt"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button class="site-btn mt-30" type="submit">Get Quote</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area end -->
@endsection
