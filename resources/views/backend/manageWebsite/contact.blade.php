@extends('layouts.backendlayout')


@section('content')
    <!-- Page Heading -->
    @if (Session::has('success'))
        <div class="alert alert-success mt-2">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="row mt-5 ml-5 d-flex justify-content-between">
        <h1 class="h3 mb-2 text-gray-800">Contact Us</h1> <a href="{{ route('backend.edit.contact', $contacts->id) }}"
            class="btn btn-primary mr-5">Edit</a>
    </div>

    <div class="contact-form-wrap mt-4 ml-5 row">
        <div class="contact-form-box mt-2 col-md-4">
            <h4><i class="fas fa-map"></i> Address</h4>
            <p>
                {{ $contacts->address }}
            </p>
        </div>
        <div class="contact-form-box mt-2 col-md-4">
            <h4><i class="far fa-clock"></i> Shop Hours</h4>
            <p>
                {{ $contacts->shopHours }} <br>
            </p>
        </div>
        <div class="contact-form-box mt-2 col-md-4">
            <h4><i class="fas fa-address-book"></i> Contact</h4>
            <p>
                Phone: {{ $contacts->phone }} <br>
                Email: {{ $contacts->email }}
            </p>
        </div>
    </div>
@endsection
