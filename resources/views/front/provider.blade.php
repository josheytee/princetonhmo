@extends('layouts.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8" data-background="assets/images/uploads/board.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2 class="title">Providers</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Provider</li>
                        </ul>
                        <h1 class="back-title">Provider</h1>
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
                            <!-- <div class="about-thumb-small">
                             <img src="assets/images/about/04.jpeg" alt="">
                         </div> -->
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQof2zQ_dwgvNkGE1DEfYA2TUqXoddJ2h4TrQ&usqp=CAU"
                                alt="">
                            <span class="shape">
                                <img src="assets/images/about/shape.png" alt="">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content about-content-3">
                        <div class="section-heading mb-35">
                            <h4 class="sub-title">Providers</h4>
                            <h2 class="section-title">Become a Provider</h2>
                            <p>Princeton has partnered with healthcare professionals and world-class providers of
                                health-related services in Nigeria. The association with Liberty Holdings also ensures that
                                partnerships exist with leading healthcare professionals in other countries for members on
                                the company’s international plans.
                            </p>
                            <p>
                                The Princeton Provider Network comprises of the following medical specialities:

                                Primary Care Clinics
                                Secondary/Specialist Care Clinics
                                Ancillary Services (Laboratories, X-ray centres etc.)
                                The Princeton Specialist panel comprises the following medical specialities:

                                Physicians
                                Cardiologists
                                General Surgeons
                                Neurologists
                                paediatricians
                                Obstetricians and Gynaecologists
                                Orthopaedics
                                Endocrinologists
                                Haematologists
                                Anaesthetics
                                Dermatologists
                                Ear, nose and throat (ENT) Specialists
                                Oncologists
                                Gastroenterologists
                                Urologists
                                And many more
                                To join our network, please complete the e-application form below</p>
                        </div>
                        <!-- <a href="about.html" class="site-btn transparent">Learn More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->

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
                                    role="tab" aria-controls="appointment" aria-selected="true">Join Our Network</a>
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
                                                    <a href="contact.html" class="site-btn red">Submit</a>
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
    </div>
@endsection
