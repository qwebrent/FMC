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
                            We offer customizable catering services for all types of events. From intimate gatherings to
                            large corporate events, our team is dedicated to providing top-notch service and delicious food.
                            Contact us today to start planning your event.
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

    <!-- carousel section -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="marquee-full-width">
                    <div class="marquee-box">
                        <div class="marquee">
                            <figure>
                                <img src="assets/img/fmcimages/1.jpg" alt="featured creator">
                                <figcaption>Sanjeev kapoor Academy</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/img/fmcimages/2.png" alt="featured creator">
                                <figcaption>Tuition Fe by BSE</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/img/fmcimages/3.png" alt="featured creator">
                                <figcaption>Symboisis Centre For Entrepreneurship & Innovation</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/img/fmcimages/4.png" alt="featured creator">
                                <figcaption>Srimantha</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/img/fmcimages/5.jpg" alt="featured creator">
                                <figcaption>Gurukul by 100X VC</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/img/fmcimages/6.jpg" alt="featured creator">
                                <figcaption>Shikshamaitri</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/img/fmcimages/7.jpg" alt="featured creator">
                                <figcaption>Edifypath</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/img/fmcimages/8.jpg" alt="featured creator">
                                <figcaption>Indian Energy Skill Development by UPES</figcaption>
                            </figure>
                            <figure>
                                <img src="assets/img/fmcimages/9.jpg" alt="featured creator">
                                <figcaption>Meghnad Desai Academy Of Economics</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end carousel section -->


    <!-- testimonail-section -->
    <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        @foreach ($clients as $client)
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="/images/{{ $client->image }}" alt="" />
                                </div>
                                <div class="client-meta">
                                    <h3>{{ $client->client }}</h3>
                                    <p class="testimonial-body">
                                        " {{ $client->message }} "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="single-testimonial-slider">
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
                        </div> --}}
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

    <section class="container-fluid margin-top">
        <div class="container-sm">
            <h1 class="ann p-5">Calendar Event</h1>
            <div class="row justify-content-center">
                <div class="col-md-11" style="background-color: white; border-radius:5px;">

                    <div class="card-style calendar-card">
                        <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-standard mb-5">

                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </section>
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
