@extends('layouts.main')

@section('content')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area bg_img pb-160" data-overlay="8"
        data-background="assets/images/bg/about-breadcrumb-bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-content">
                        <h2 class="title">Shoping Cart</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>|</li>
                            <li>Cart</li>
                        </ul>
                        <h1 class="back-title">Cart</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end -->
    <div id="princeton">
        <cart />
    </div>
@endsection
@push('scripts')
    <script src="https://checkout.flutterwave.com/v3.js"></script>
@endpush
