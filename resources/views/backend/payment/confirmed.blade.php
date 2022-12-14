@extends('layouts.backendlayout')

@section('css')
    <!-- Custom styles for this page -->
    <link href="assets/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Payments</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Confirmed Payments</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Contact Number</th>
                            <th>Email Address</th>
                            <th>Reference No.</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->fullname }}</td>
                                <td>{{ $payment->phone }}</td>
                                <td>{{ $payment->email }}</td>
                                <td>
                                    {{ $payment->referenceNum }}
                                </td>
                                <td class="text-center">
                                    {{-- <a class="btn btn-outline-info btn-sm" data-toggle="modal"
                                        data-target="#view{{ $reservation->id }}">View Full Details</a>
                                    @include('backend.modals.confirmedModal') --}}
                                    <a class="btn btn-outline-info btn-sm" data-toggle="modal"
                                        data-target="#accept{{ $payment->id }}">View Payment Details</a>
                                    @include('backend.modals.paymentDetails')
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
