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
                            <li>Providers</li>
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

                <div class="col-lg-12">
                    <div class="about-thumb-wrap about-thumb-wrap-3 mt-60">
                        <div class="about-thumb-big">
                            <!-- <div class="about-thumb-small">
                                                                                                                                                     <img src="assets/images/about/04.jpeg" alt="">
                                                                                                                                                 </div> -->
                            {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQof2zQ_dwgvNkGE1DEfYA2TUqXoddJ2h4TrQ&usqp=CAU"
                                alt=""> --}}
                            {{-- <span class="shape">
                                <img src="assets/images/about/shape.png" alt="">
                            </span> --}}
                        </div>
                    </div>
                    <div class="about-content about-content-3">
                        <div class="section-heading mb-35">
                            <h4 class="sub-title">Providers</h4>
                            <h2 class="section-title">PRINCETON HMO NETWORK OF PROVIDERS</h2>
                            <p>Search by Hospital name, Location or Plan type. </p>
                        </div>
                        <!-- <a href="about.html" class="site-btn transparent">Learn More</a> -->
                    </div>

                    <providers />


                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->
@endsection
