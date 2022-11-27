@extends('layouts.mainlayout')

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>FMC Catering Services</p>
                        <h1>Reservation Form</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <div class="row justify-content-center"
        style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.959), rgba(119, 119, 119, 0.945)), url('assets/img/28.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="col-md-6 ">
            <form action="{{ route('reservation.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="card bg-danger mt-5 mb-5">
                    {{-- <div class="card-header bg-transparent border-bottom-0 text-center mt-5 ">
                        <h4>Customize Package</h4>
                    </div> --}}
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row mt-5">
                                        <div class="form-group col-md-4">
                                            <label for="lname" class="text-white">Last Name: *</label>
                                            <input type="text" class="form-control" name="lname" id="lname"
                                                placeholder="Last Name" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="fname" class="text-white">First Name: *</label>
                                            <input type="text" class="form-control" name="fname" id="fname"
                                                placeholder="First Name" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="mname" class="text-white">Middle Name:</label>
                                            <input type="text" class="form-control" name="mname" id="mname"
                                                placeholder="Middle Name" </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="phone" class="text-white">Contact Number: *</label>
                                            <input type="text" class="form-control" name="phone" id="phone"
                                                placeholder="09XXXXXXXXX" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email" class="text-white">Email Address: *</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                                placeholder="Email Here" required>
                                            <small id="emailHelp" class="form-text text-white">We'll never share your
                                                email
                                                with
                                                anyone else.</small>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="event_type" class="text-white">Type of Event: *</label>
                                            <input type="text" class="form-control" name="event_type"
                                                value="Wedding/Debut" id="event_type" placeholder="Wedding" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="event_date" class="text-white">Event Date: *</label>
                                            <input type="date" class="form-control" name="event_date" id="event_date"
                                                placeholder="January 01, 2021" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="persons" class="text-white">Number of Persons: *</label>
                                            <input type="number" class="form-control" name="persons" id="persons"
                                                placeholder="50" required>
                                            <small id="persons" class="small" class="form-text text-muted">Minimun
                                                of 50
                                                persons. (50, 75, 100, 125, 150)</small>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="package" class="text-white">Package Number: *</label>
                                            <select class="form-control" id="package" name="package">
                                                <option value="" disabled selected hidden class="text-muted">Select
                                                    Item
                                                </option>
                                                <option value="package1">Package One</option>
                                                <option value="package2">Package Two</option>
                                                <option value="package3">Package Three</option>
                                                <option value="package4">Package Four</option>
                                                <option value="package5">Package Five</option>
                                                <option value="package6">Package Six</option>
                                                <option value="package7">Package Seven</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="message" class="text-white">Additional Message: *</label>
                                            <input type="text" class="form-control" name="message" id="message"
                                                placeholder="Message">
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <p><a href="/agreements" class="col-md-12 text-white">FMC Agreement</a></p>
                                    </div>
                                    <div class="form-check col-md-12 text-center">
                                        <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label text-white" for="exampleCheck1">I agree to the
                                            Terms and Conditions of FMC Catering and Services</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-md">Submit</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>

    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                    <h5 class="tnc" class="modal-title" id="myModalLabel">FMC Catering
                        Services
                        <br>
                        <small>Terms & Conditions</small>
                </div>
                <div class="modal-body">
                    <p>The customer needs to pay 50% of the package price for reservation fee
                        which
                        deductable to the total of payment. The reservation is valid for 3 days
                        and
                        shall be forfeited thus, not confirm within the period of time. </p>
                    <p>This is base
                        on the terms and condition of FMC Catering Services that will be sign by
                        agreement of the customer and the owner. If the customer wishes to
                        cancel
                        the event the payment is not refundable, non consumable and no
                        transferable.
                        Balance to be paid in cash a day before the event.</p>
                    <p>None payment of
                        the full
                        agreed amount reserves the right for the caterer to cancel all its
                        services.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
