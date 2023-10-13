@extends('frontend.layouts.master')

@section('title', 'GOGet || About Us')

@section('main-content')



    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div style="display: flex; justify-content: center; align-items: center;">
                <div>
                    <img src="{{ asset('images/about-pic.png') }}" alt="about us pic" style="width: 450px">
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-content">
                        <h3>Welcome To <span>GOGet</span></h3>
                        <p>
                            We always provide good and high quality products to meet your needs.
                        </p>
                        <div class="button">
                            <a href="{{ route('blog') }}" class="btn">Our Blog</a>
                            <a href="{{ route('contact') }}" class="btn primary">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->


    <!-- Start Shop Services Area -->
    <section class="shop-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Free shiping</h4>
                        <p>Orders over PHP1000</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Free Return</h4>
                        <p>Within 30 days returns</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Sucure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Best Peice</h4>
                        <p>Guaranteed price</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->

    @include('frontend.layouts.newsletter')
@endsection
