@extends('layouts.backendlayout')


@section('content')
    <!-- Page Heading -->
    <form action="{{ route('backend.update.contact', $contacts->id) }}" method="post" enctype="multipart/form-data">
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
                <h4><i class="fas fa-map"></i> Address</h4>
                <p>
                <div class="row mb-3">
                    <div class="col-sm-10"><input type="text" class="form-control" id="inputText" name="address"
                            value="{{ $contacts->address }}">
                    </div>
                </div>
                </p>
            </div>
            <div class="contact-form-box mt-2 col-md-4">
                <h4><i class="far fa-clock"></i> Shop Hours</h4>
                <p>
                <div class="col-sm-10"><input type="text" class="form-control" id="inputText" name="shopHours"
                        value="{{ $contacts->shopHours }}">
                </div>
                </p>
            </div>
            <div class="contact-form-box mt-2 col-md-4">
                <h4><i class="fas fa-address-book"></i> Contact</h4>
                <p>
                <div class="col-sm-10"><input type="text" class="form-control" id="inputText" name="phone"
                        value="{{ $contacts->phone }}">
                </div>
                <div class="col-sm-10 mt-3"><input type="text" class="form-control" id="inputText" name="email"
                        value="{{ $contacts->email }}">
                </div>
                </p>
            </div>


        </div>
    </form>
@endsection
