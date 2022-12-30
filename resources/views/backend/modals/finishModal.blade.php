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
                <h4 class="modal-title text-dark font-weight-bold"">Are you want to mark this reservation by
                    {{ $reservation->fname }} as finished?</h4>
                <form action="{{ route('finish.reservation', $reservation->id) }}" method="post">
                    @csrf
                    @method('put')
                    <br>
                    <br>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">Yes</button>
                </form>
            </div>


        </div>



    </div>
</div>
</div>
