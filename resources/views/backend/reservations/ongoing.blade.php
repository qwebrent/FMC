@extends('layouts.backendlayout')

@section('css')
    <!-- Custom styles for this page -->
    <link href="assets/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Reservations</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ongoing Reservations</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Contact Number</th>
                            <th>Email Address</th>
                            <th>Customize</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->fullname }}</td>
                                <td>{{ $reservation->phone }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>
                                    @if ($reservation->isOngoing == 1)
                                        <img src="assets/backend/img/tick-mark.png" height="25px" width="25px"
                                            alt="">
                                    @else
                                        <img src="assets/backend/img/cancel.png" height="25px" width="25px"
                                            alt="">
                                    @endif
                                </td>
                                <td class="text-center">
                                    {{-- <a class="btn btn-outline-info btn-sm" data-toggle="modal"
                                        data-target="#accept{{ $reservation->id }}">View Full Details</a> --}}
                                    {{-- @include('layout.reservation.modal') --}}
                                    *Button for Finished Reservation*
                                </td>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="assets/backend/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/backend/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/backend/js/demo/datatables-demo.js"></script>
@endsection
