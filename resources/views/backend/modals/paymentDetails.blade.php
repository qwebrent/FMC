<div class="modal fade bd-example-modal-lg" id="accept{{ $payment->id }}" tabindex="-1" role="dialog"
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
                <h4 class="modal-title text-dark font-weight-bold"">{{ $payment->fullname }} -
                    {{ $payment->event_type }}</h4>
                <form action="{{ route('ongoing.reservation', $payment->id) }}" method="post">
                    @csrf
                    @method('put')

                    <br>
                    <br>
                    <table align="center" class="table table-striped">
                        <tr>
                            <th>RESERVATION ID</th>
                            <td>{{ $payment->id }}</td>
                        </tr>
                        <tr>
                            <th>FULL NAME</th>
                            <td>{{ $payment->fullname }}</td>
                        </tr>
                        <tr>
                            <th>CONTACT NUMBER</th>
                            <td>{{ $payment->phone }}</td>
                        </tr>
                        <tr>
                            <th>EMAIL ADDRESS</th>
                            <td>{{ $payment->email }}</td>
                        </tr>
                        <tr>
                            <th>EVENT TYPE</th>
                            <td>{{ $payment->event_type }}</td>
                        </tr>
                        <tr>
                            <th>EVENT DATE</th>
                            <td>{{ $payment->event_date }}</td>
                        </tr>
                        <tr>
                            <th>PACKAGE</th>
                            <td>{{ Str::Title($payment->package_num) }}</td>
                        </tr>
                        <tr>
                            <th>MODE OF PAYMENT</th>
                            <td>{{ Str::Title($payment->modeOfPayment) }}</td>
                        </tr>
                        <tr>
                            <th>REFERENCE NUMBER</th>
                            <td>{{ $payment->referenceNum }}</td>
                        </tr>

                    </table>

                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Mark as Ongoing</button>
                        <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank"
                            rel="noopener noreferrer" class="btn btn-success">Compose
                            Email</a>
                </form>
                {{-- <form action="#" method="post">
                    @csrf
                    @method('put')
                    <button class="btn btn-danger" type="submit">Refuse</button>
                </form> --}}
            </div>


        </div>



    </div>
</div>
</div>
