@extends('layouts.mainlayout')

@include('layouts.partials.sub-partials.crumbsServices')
@section('content')
    <!-- packages -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="text-center mb-5">
                <div class="breadcrumb-text mb-2">
                    <p>Download our Package List</p>
                </div>
                <a href="assets/img/pdf/FMC-Package-List.pdf" download='FMC-Package-List'
                    class="btn btn-md btn-warning">Download <i class="fa fa-download"></i>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('packageOne') }}"><img src="assets/img/package/package1.jpg"
                                    alt="" /></a>
                        </div>
                        <h3>Wedding and Debut</h3>
                        <p class="product-price"><span>Package</span> One</p>
                        <a href="{{ route('packageOne') }}" class="cart-btn"><i class="fas fa-search"></i> More Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('packageTwo') }}"><img src="assets/img/package/package2.jpg"
                                    alt="" /></a>
                        </div>
                        <h3>Wedding and Debut</h3>
                        <p class="product-price"><span>Package</span> Two</p>
                        <a href="{{ route('packageTwo') }}" class="cart-btn"><i class="fas fa-search"></i> More Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('packageThree') }}"><img src="assets/img/package/package2.jpg"
                                    alt="" /></a>
                        </div>
                        <h3>Wedding and Debut</h3>
                        <p class="product-price"><span>Package (Per plate)</span> Three</p>
                        <a href="{{ route('packageThree') }}" class="cart-btn"><i class="fas fa-search"></i> More
                            Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('packageFour') }}"><img src="assets/img/package/package1.jpg"
                                    alt="" /></a>
                        </div>
                        <h3>Wedding and Debut</h3>
                        <p class="product-price"><span>Package (Per plate)</span> Four</p>
                        <a href="{{ route('packageFour') }}" class="cart-btn"><i class="fas fa-search"></i> More Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('packageFive') }}"><img src="assets/img/package/package2.jpg"
                                    alt="" /></a>
                        </div>
                        <h3>Wedding and Debut</h3>
                        <p class="product-price"><span>Package (Per plate)</span> Five</p>
                        <a href="{{ route('packageFive') }}" class="cart-btn"><i class="fas fa-search"></i> More Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('packageSix') }}"><img src="assets/img/package/package2.jpg"
                                    alt="" /></a>
                        </div>
                        <h3>Wedding and Debut</h3>
                        <p class="product-price"><span>Package (Service Only)</span> Six</p>
                        <a href="{{ route('packageSix') }}" class="cart-btn"><i class="fas fa-search"></i> More Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('packageSeven') }}"><img src="assets/img/package/package2.jpg"
                                    alt="" /></a>
                        </div>
                        <h3>Wedding and Debut</h3>
                        <p class="product-price"><span>Package (Service Only)</span> Seven</p>
                        <a href="{{ route('packageSeven') }}" class="cart-btn"><i class="fas fa-search"></i> More
                            Details</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('custom.reservation') }}"><img src="assets/img/package/package2.jpg"
                                    alt="" /></a>
                        </div>
                        <h3>Customize</h3>
                        <p class="product-price"><span>Package</span> Eight</p>
                        <a href="{{ route('custom.reservation') }}" class="cart-btn"><i class="fas fa-search"></i> More
                            Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end packages -->
@endsection
