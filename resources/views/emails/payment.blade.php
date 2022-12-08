@component('mail::message')
 # Thank you for choosing FMC Catering Services, Mr./Ms. {{ $data['name'] }}
<br>
You will be redirected to the FMC Catering Website for the review of your Reservation.<br>
<strong>Important: </strong> Please pay at least 50% of your package price. <br>
<br>
<p>Please click the Link below.</p><br>
<i>This link will expire in a day</i>
{{-- <a class="btn btn-secondary btn-lg" href="{{ url('confirm-payment'. $data['id'] ) }}">{{ url('confirm-payment'. $data['id'] ) }}</a> --}}

<a class="btn btn-secondary btn-lg" href="{{ $data['link'] }}">{{ $data['link'] }}</a>

Thanks,<br>
FMC Catering
@endcomponent
