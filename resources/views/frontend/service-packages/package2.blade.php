@extends('layouts.mainlayout')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>See more Details</p>
                        <h1>Package</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- single product -->
    <div class="single-product mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        <img src="assets/img/package/package1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single-product-form">
                        <a href="#" class="cart-btn"><i class="fas fa-calendar"></i> Reserve</a>
                    </div>
                    <div class="single-product-content">
                        <h3>Buffet</h3>
                        <p class="single-product-pricing">50 Person at Php 24,999.00</p>
                        <div class="row">
                            <ul>
                                <li>Steam Rice</li>
                                <li>Pork</li>
                                <li>Fish</li>
                            </ul>
                            <ul>
                                <li>Chicken</li>
                                <li>Vegetable</li>
                                <li>Desert</li>
                            </ul>
                            <ul>
                                <li>Drinks</li>
                            </ul>
                        </div>
                        <h4>Inclusions</h4>
                        <p>Complete Set Up with Backdrop</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->
@endsection
