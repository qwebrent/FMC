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
                    <div class="container">
                        <label for="Name" class="text-white">Name:</label>
                        <p class="text-white">{{ $reservations->fullname }}</p>
                        <label for="Name" class="text-white">Contact Number:</label>
                        <p class="text-white">{{ $reservations->phone }}</p>
                        <label for="Name" class="text-white">Email Address:</label>
                        <p class="text-white">{{ $reservations->email }}</p>
                        <label for="Name" class="text-white">Event:</label>
                        <p class="text-white">{{ $reservations->event_type }}</p>
                        <label for="Name" class="text-white">Date:</label>
                        <p class="text-white">{{ $reservations->event_date }}</p>
                        <label for="Name" class="text-white">Package:</label>
                        <p class="text-white">{{ Str::title($reservations->package) }}</p>
                        <label for="Name" class="text-white">Number of Persons:</label>
                        <p class="text-white">{{ $reservations->persons }}</p>
                        <hr>
                        <p class="text-white">Menu: </p>
                        @foreach ($reservations->menus as $menu)
                            <li class="text-white"><strong>Pork:</strong> {{ Str::title($menu->pork) }} </li>
                            <li class="text-white"><strong>Chicken:</strong> {{ Str::title($menu->chicken) }} </li>
                            <li class="text-white"><strong>Vegetable:</strong> {{ Str::title($menu->vegetable) }} </li>
                            <li class="text-white"><strong>Beef:</strong> {{ Str::title($menu->beef) }} </li>
                            <li class="text-white"><strong>Seafood:</strong> {{ Str::title($menu->sea_food) }} </li>
                            <li class="text-white"><strong>Desserts:</strong> {{ Str::title($menu->desserts) }} </li>
                        @endforeach
                        <hr>

                        <a class="btn btn-primary" href="{{ route('actual.payment', $reservations->id) }}">Proceed to
                            Payment</a>

                        <div class="mt-2">
                            <form method="POST" action="{{ route('refuse.reservation', $reservations->id) }}">
                                @csrf
                                @method('DELETE')
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-warning delete" title='Delete'>Cancel
                                    Reservation</button>
                            </form>
                        </div>

                    </div>
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
