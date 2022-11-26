@extends('layouts.mainlayout')

@include('layouts.partials.sub-partials.hero')
@section('content')
    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> Services</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aliquid, fuga quas itaque eveniet beatae optio.
                        </p>
                    </div>
                </div>
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
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('packageThree') }}"><img src="assets/img/package/package2.jpg"
                                    alt="" /></a>
                        </div>
                        <h3>Wedding and Debut</h3>
                        <p class="product-price"><span>Package</span> Three</p>
                        <a href="{{ route('packageThree') }}" class="cart-btn"><i class="fas fa-search"></i> More
                            Details</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2 text-center mt-50">
                    <div class="section-title">
                        <h3><a href="/services" class="btn btn-secondary"><i class="fas fa-search"></i> See More</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product section -->


    <!-- testimonail-section -->
    <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar1.png" alt="" />
                            </div>
                            <div class="client-meta">
                                <h3>Saira Hakim <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis
                                    et quasi architecto beatae vitae dict eaque ipsa quae ab
                                    illo inventore Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar2.png" alt="" />
                            </div>
                            <div class="client-meta">
                                <h3>David Niph <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis
                                    et quasi architecto beatae vitae dict eaque ipsa quae ab
                                    illo inventore Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar3.png" alt="" />
                            </div>
                            <div class="client-meta">
                                <h3>Jacob Sikim <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis
                                    et quasi architecto beatae vitae dict eaque ipsa quae ab
                                    illo inventore Sed ut perspiciatis unde omnis iste natus
                                    error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonail-section -->

    <!-- advertisement section -->
    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <p class="top-sub"></p>
                        <h2>We are <span class="orange-text">FMC Catering</span></h2>
                        <p>
                            For more than 16 years , we have been blessed to be a part of thousands of
                            weddings and debuts celebrations. In all these events, we make sure we are not
                            only your caterer but more importantly your partner in every step from
                            conceptualizing, budgeting and planning up to final execution.
                        </p>
                        <a href="/aboutus" class="boxed-btn mt-4">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->

    <!-- shop banner -->
    {{-- <section class="shop-banner">
        <div class="container">
            <h3>
                December sale is on! <br />
                with big <span class="orange-text">Discount...</span>
            </h3>
            <div class="sale-percent">
                <span>Sale! <br />
                    Upto</span>50% <span>off</span>
            </div>
            <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section> --}}
    <!-- end shop banner -->
@endsection
