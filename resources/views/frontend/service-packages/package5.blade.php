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
                        <a href="{{ route('reservation') }}" class="cart-btn"><i class="fas fa-calendar"></i> Reserve</a>
                    </div>
                    <div class="single-product-content">
                        <h3>Menu C</h3>
                        <p class="single-product-pricing">Php {{ $price5->package_price }} per plate</p>
                        <div class="row">
                            <ul>
                                <li>Steam Rice</li>
                                <li>Pork</li>
                                <li>Beef</li>
                            </ul>
                            <ul>
                                <li>Fish</li>
                                <li>Chicken</li>
                                <li>Vegetable</li>
                            </ul>
                            <ul>
                                <li>Desert</li>
                                <li>Drinks</li>
                            </ul>
                        </div>
                        <h4>Inclusions</h4>
                        <p>Complete Set Up with service</p>
                        <br>
                        <p>Not Included: <em>Stage backdrop styling</em></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->
@endsection
