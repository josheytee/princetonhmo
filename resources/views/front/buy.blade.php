@extends('layouts.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8"
        data-background="https://princetonhmo.net/wp-content/uploads/2019/08/logo_princeon.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2 class="title">Appointment</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Appointment</li>
                        </ul>
                        <h1 class="back-title">Contact</h1>
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
                        <ul class="nav text-center" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="appointment-tab" data-toggle="tab" href="#appointment"
                                    role="tab" aria-controls="appointment" aria-selected="true">Enrollee Form
                                    (Individual)</a>
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
                                    <div class="contact-form-touch">
                                        <div class="section-title">
                                            <h2 class="title">Principal Enrollee</h2>
                                        </div>
                                        <div class="contact-form-getin mt-35">
                                            <form action="index.html">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="fullname" id="fullname-label">Family Name </label>
                                                            <input type="text" name="name" id="fullname"
                                                                placeholder="Sokila DJ Maxien">
                                                            <span><i class="fal fa-user"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label for="address" id="address-label">Home Address</label>
                                                            <input type="text" name="mail" id="address">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="state" id="state-label">State</label>
                                                            <input type="text" name="mail" id="state">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="address" id="address-label"> Phone</label>
                                                            <input type="text" name="mail" id="address">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="form-group">
                                                            <label for="email" id="email-label">Email Address</label>
                                                            <input type="email" name="mail" id="email"
                                                                placeholder="sokilainfo@gmail.com">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="email" id="email-label">Email Address</label>
                                                            <input type="email" name="mail" id="email"
                                                                placeholder="sokilainfo@gmail.com">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="email" id="email-label">Date of Birth</label>
                                                            <input type="text" name="mail" id="email">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="email" id="email-label">Genotype</label>
                                                            <input type="text" name="mail" id="email">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="address" id="address-label"> Occupation</label>
                                                            <input type="text" name="mail" id="address">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="state" id="state-label">Designation</label>
                                                            <input type="text" name="mail" id="state">
                                                            <span><i class="fal fa-envelope"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="messages" id="messages-label">Leave A
                                                                Message</label>
                                                            <textarea name="message" id="messages" placeholder="Write here"></textarea>
                                                            <span><i class="fal fa-pen-alt"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button class="site-btn mt-30" type="submit">Submit Form</button>
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
