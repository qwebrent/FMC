@extends('layouts.mainlayout')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>FMC Catering Services</p>
                        <h1>Reservations</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center"
        style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.959), rgba(119, 119, 119, 0.945)), url('assets/img/28.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="col-md-6">
            <div class="card bg-danger mt-5 mb-5">
                <div class="card-body">
                    <div class="container">
                        <div class="text-center">
                            <p class="card-text text-white">Please check your email after 1-2 days to receive your payment
                                form
                            </p>
                            <p class="card-text text-white">Thank you for choosing our services</p>

                            <a href="/" class="btn btn-warning btn-lg">Back to Home</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
@endsection
