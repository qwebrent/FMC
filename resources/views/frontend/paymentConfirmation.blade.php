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
                    <div class="text-center mt-4 mb-4">
                        <h2 class="text-white">Reservation Details</h2>
                    </div>
                    <form action="{{ route('payment.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container col-md-6">
                            {{-- <div class="col-md-12 text-center">
                                <div>
                                    <label for="Name" class="text-white">Name:</label>
                                    <input type="text" name="fullname" value="{{ $reservation->fullname }}">
                                </div>

                                <div>
                                    <label for="Name" class="text-white">Contact Number:</label>
                                    <input type="text" name="phone" value="{{ $reservation->phone }}">
                                </div>

                                <div class="">
                                    <label for="Name" class="text-white">Email Address:</label>
                                    <input type="text" name="email" value="{{ $reservation->email }}">
                                </div>

                                <div>
                                    <label for="Name" class="text-white">Event:</label>
                                    <input type="text" name="event_type" value="{{ $reservation->event_type }}">
                                </div>

                                <div>
                                    <label for="Name" class="text-white">Date:</label>
                                    <input type="text" name="event_date" value="{{ $reservation->event_date }}">
                                </div>

                                <div>
                                    <label for="Name" class="text-white">Mode of Payment:</label>
                                    <input type="text" name="modeOfPayment" value="{{ $reservation->modeOfPayment }}">
                                </div>

                                <div>
                                    <label for="Name" class="text-white">Reference #:</label>
                                    <input type="text" name="referenceNum" value="{{ $reservation->referenceNum }}">
                                </div>

                                <hr>

                            </div> --}}

                            <TABLE>
                                <TR>
                                    <TD class="text-white">Name: </TD>
                                    <TD><INPUT TYPE="text" NAME="fullname" SIZE="25"
                                            value="{{ $reservation->fullname }}"></TD>
                                </TR>
                                <TR>
                                    <TD class="text-white">Contact Number: </TD>
                                    <TD><INPUT TYPE="TEXT" NAME="phone" SIZE="25"
                                            value="{{ $reservation->phone }}"></TD>
                                </TR>
                                <TR>
                                    <TD class="text-white">Email: </TD>
                                    <TD><INPUT TYPE="TEXT" NAME="email" SIZE="25"
                                            value="{{ $reservation->email }}"></TD>
                                </TR>
                                <TR>
                                    <TD class="text-white">Event: </TD>
                                    <TD><INPUT TYPE="TEXT" NAME="event_type" SIZE="25"
                                            value="{{ $reservation->event_type }}"></TD>
                                </TR>
                                <TR>
                                    <TD class="text-white">Date: </TD>
                                    <TD><INPUT TYPE="TEXT" NAME="event_date" SIZE="25"
                                            value="{{ $reservation->event_date }}"></TD>
                                </TR>
                                <TR>
                                    <TD class="text-white">Package Number: </TD>
                                    <TD><INPUT TYPE="TEXT" NAME="package_num" SIZE="25"
                                            value="{{ Str::title($reservation->package) }}"></TD>
                                </TR>
                                <TR>
                                    <TD class="text-white">Mode of Payment: </TD>
                                    <TD><INPUT TYPE="TEXT" NAME="modeOfPayment" SIZE="25"
                                            value="{{ $reservation->modeOfPayment }}"></TD>
                                </TR>
                                <TR>
                                    <TD class="text-white">Reference No.</TD>
                                    <TD><INPUT TYPE="TEXT" NAME="referenceNum" SIZE="25"
                                            value="{{ $reservation->referenceNum }}"></TD>
                                </TR>
                            </TABLE>
                            <div class="text-center">
                                <img src="" alt="GCash QR Code here" class="text-white">
                            </div>


                            {{-- @foreach ($reservations->menus as $menu)
                            <li class="text-white"><strong>Pork:</strong> {{ Str::title($menu->pork) }} </li>
                            <li class="text-white"><strong>Chicken:</strong> {{ Str::title($menu->chicken) }} </li>
                            <li class="text-white"><strong>Vegetable:</strong> {{ Str::title($menu->vegetable) }} </li>
                            <li class="text-white"><strong>Beef:</strong> {{ Str::title($menu->beef) }} </li>
                            <li class="text-white"><strong>Seafood:</strong> {{ Str::title($menu->sea_food) }} </li>
                            <li class="text-white"><strong>Desserts:</strong> {{ Str::title($menu->desserts) }} </li>
                        @endforeach --}}
                            <hr>

                            <button class="btn btn-primary" type="submit">Proceed</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
@endsection

<script type="text/javascript">
    $(document).ready(function() {
        $('.delete').click(function(e) {
            if (!confirm('Are you sure you want to delete this post?')) {
                e.preventDefault();
            }
        });
    });
</script>
