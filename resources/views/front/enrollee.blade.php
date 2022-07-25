@extends('layouts.main')

@section('content')
    <div>&nbsp;</div>
    <!-- contact area start -->
    <div class="contact-area pt-110 mt-5 pb-110 bg_img" data-overlay="94"
        data-background="https://princetonhmo.net/wp-content/uploads/2019/08/logo_princeon.png">
        <div class="container">
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
                                                <div class="country-select">
                                                    <label>Plans <span class="required">*</span></label>
                                                    <select>
                                                        <option value="volvo">Blue</option>
                                                        <option value="saab">Royal</option>
                                                        <option value="mercedes">Platinum</option>
                                                    </select>
                                                </div>
                                            </div>
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


                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="address" id="address-label"> Principal Name:</label>
                                                    <input type="text" name="mail" id="address">
                                                    <span><i class="fal fa-envelope"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="email" id="email-label">Date of Birth</label>
                                                    <input type="email" name="mail" id="email"
                                                        placeholder="sokilainfo@gmail.com">
                                                    <span><i class="fal fa-envelope"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="email" id="email-label">Blood Group:</label>
                                                    <input type="email" name="mail" id="email"
                                                        placeholder="sokilainfo@gmail.com">
                                                    <span><i class="fal fa-envelope"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="email" id="email-label">Allergies:</label>
                                                    <input type="email" name="mail" id="email"
                                                        placeholder="sokilainfo@gmail.com">
                                                    <span><i class="fal fa-envelope"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="email" id="email-label">Spouse:</label>
                                                    <input type="email" name="mail" id="email"
                                                        placeholder="sokilainfo@gmail.com">
                                                    <span><i class="fal fa-envelope"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="email" id="email-label">Date of Birth:</label>
                                                    <input type="date" name="mail" id="email"
                                                        placeholder="sokilainfo@gmail.com">
                                                    <span><i class="fal fa-envelope"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label for="email" id="email-label">Plan:</label>
                                                    <input type="email" name="mail" id="email"
                                                        placeholder="sokilainfo@gmail.com">
                                                    <span><i class="fal fa-envelope"></i></span>
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
    <!-- contact area end -->
@endsection
