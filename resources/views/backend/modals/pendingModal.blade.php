<div class="modal fade bd-example-modal-lg" id="accept{{ $reservation->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-info">
                <h3 class="modal-title text-light font-weight-bold" id="exampleModalLabel">DETAILS</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <h4 class="modal-title text-dark font-weight-bold"">ARE YOU SURE YOU WANT TO APPROVE
                    THIS REQUEST?</h4>
                <form action="{{ route('confirm.reservation', $reservation->id) }}" method="post">
                    @csrf
                    @method('put')
                    <br>
                    <br>
                    <table align="center" class="table table-striped">
                        <tr>
                            <th>RESERVATION ID</th>
                            <td>{{ $reservation->id }}</td>
                        </tr>
                        <tr>
                            <th>FULL NAME</th>
                            <td>{{ $reservation->fullname }}</td>
                        </tr>
                        <tr>
                            <th>CONTACT NUMBER</th>
                            <td>{{ $reservation->phone }}</td>
                        </tr>
                        <tr>
                            <th>EMAIL ADDRESS</th>
                            <td>{{ $reservation->email }}</td>
                        </tr>
                        <tr>
                            <th>EVENT TYPE</th>
                            <td>{{ $reservation->event_type }}</td>
                        </tr>
                        <tr>
                            <th>EVENT DATE</th>
                            <td>{{ $reservation->event_date }}</td>
                        </tr>
                        <tr>
                            <th>PACKAGE</th>
                            <td>{{ Str::Title($reservation->package) }}</td>
                        </tr>
                        <tr>
                            <th>NUMBER OF PERSONS</th>
                            <td>{{ $reservation->persons }}</td>
                        </tr>
                        <tr>
                            <th>MESSAGE</th>
                            <td>{{ $reservation->message }}</td>
                        </tr>
                        <hr>
                        @foreach ($reservation->menus as $menu)
                            <tr>
                                <th>PORK</th>
                                <td>{{ Str::title($menu->pork) }}</td>
                            </tr>
                            <tr>
                                <th>CHICKEN</th>
                                <td>{{ Str::title($menu->chicken) }}</td>
                            </tr>
                            <tr>
                                <th>VEGETABLE</th>
                                <td>{{ Str::title($menu->vegetable) }}</td>
                            </tr>
                            <tr>
                                <th>BEEF</th>
                                <td>{{ Str::title($menu->beef) }}</td>
                            </tr>
                            <tr>
                                <th>SEA FOODS</th>
                                <td>{{ Str::title($menu->sea_food) }}</td>
                            </tr>
                            <tr>
                                <th>DESSERT</th>
                                <td>{{ Str::title($menu->desserts) }}</td>
                            </tr>
                        @endforeach
                    </table>

                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">Approve</button>
                </form>
                <form action="#" method="post">
                    @csrf
                    @method('put')
                    <button class="btn btn-danger" type="submit">Refuse</button>
                </form>
            </div>


        </div>



    </div>
</div>
</div>
