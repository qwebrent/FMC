@extends('layouts.backendlayout')


@section('content')
    <!-- Page Heading -->
    <form action="{{ route('backend.update.price', $prices->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="row mt-5 ml-5 d-flex justify-content-between mr-5">
            <h1 class="h3 mb-2 text-gray-800">Edit Contact Us</h1>
            <div class="row ml-2">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

        <div class="contact-form-wrap mt-4 ml-5 row">
            <div class="contact-form-box mt-2 col-md-4">
                <h4><i class="fas fa-gift"></i> Package</h4>
                <p>
                <div class="row mb-3">
                    <div class="col-sm-10"><input type="text" class="form-control" id="inputText" name="package_name"
                            value="{{ $prices->package_name }}">
                    </div>
                </div>
                </p>
            </div>
            <div class="contact-form-box mt-2 col-md-4">
                <h4><i class="fas fa-money-bill"></i> Price</h4>
                <p>
                <div class="col-sm-10"><input type="text" class="form-control" id="inputText" name="package_price"
                        value="{{ $prices->package_price }}">
                </div>
                </p>
            </div>


        </div>
    </form>
@endsection
