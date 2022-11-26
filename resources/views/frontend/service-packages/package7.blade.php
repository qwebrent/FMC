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
                        <h3>Service B</h3>
                        <p class="single-product-pricing">100 Person - Php 25,000</p>
                        <div class="row">
                            <ul>
                                <li>100 set of utensils</li>
                                <li>Chairs and Tables</li>
                                <li>Elegant Buffet</li>
                                <li>Presidential Tables</li>
                            </ul>
                            <ul>
                                <li>Couple Tables</li>
                                <li>Parent Tables</li>
                                <li>Couch</li>
                                <li>Red Carpet</li>
                            </ul>
                            <ul>
                                <li>Rolling Shipping Dish</li>
                                <li>Juicer</li>
                                <li>Cakes Table</li>
                                <li>Charger Plate</li>
                            </ul>
                            <ul>
                                <li>Center piece for each table</li>
                                <li>Color Motif</li>
                            </ul>
                        </div>
                        <h4>Inclusions</h4>
                        <p>Complete Set Up with backdrop Only!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end single product -->
@endsection
