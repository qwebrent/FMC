@extends('layouts.backendlayout')

@section('css')
    <!-- Custom styles for this page -->
    <link href="assets/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4 mt-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Package Prices</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Package Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prices as $price)
                            <tr>
                                <td>{{ $price->package_name }}</td>
                                <td>{{ $price->package_price }}</td>
                                <td class="text-center">
                                    <a href="{{ route('backend.edit.price', $price->id) }}"
                                        class="btn btn-primary mr-5">Edit</a>
                                    {{-- @include('layout.reservation.modal') --}}
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
