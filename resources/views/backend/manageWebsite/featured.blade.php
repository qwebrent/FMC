 @extends('layouts.backendlayout')

 @section('css')
     <!-- Custom styles for this page -->
     <link href="assets/backend/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 @endsection

 @section('content')
     <!-- Page Heading -->
     <div class="row ml-1 d-flex justify-content-between">
         <h1 class="h3 mb-2 text-gray-800">Clients</h1>
         <a href="{{ route('backend.featured.add') }}" class="btn btn-primary mr-3">Add</a>
     </div>

     @if (Session::has('success'))
         <div class="alert alert-success mt-2">
             {{ Session::get('success') }}
         </div>
     @endif

     <!-- DataTales Example -->
     <div class="card shadow mb-4 mt-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold text-primary">Featured Clients</h6>
         </div>
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                     <thead>
                         <tr>
                             <th>ID</th>
                             <th>Image</th>
                             <th>Client</th>
                             <th>Message</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach ($featuredClients as $featuredClient)
                             <tr>
                                 <td>{{ $featuredClient->id }}</td>
                                 <td> <img src="/images/{{ $featuredClient->image }}" class="img-fluid" height="100"
                                         width="100" style="object-fit: contain;" alt="{{ $featuredClient->client }}">
                                 </td>
                                 <td>{{ $featuredClient->client }}</td>
                                 <td>{{ $featuredClient->message }}</td>

                                 <td class="text-center">
                                     <a href="{{ route('backend.edit.featured', $featuredClient->id) }}"
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
