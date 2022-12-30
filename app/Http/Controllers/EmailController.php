<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Mail\PaymentMail;
use App\Models\Reservation;



class EmailController extends Controller


{

    public function email($id){
        $customer = Reservation::where('id', $id)->firstOrFail();

        $signedRoute = URL::temporarySignedRoute('payment.confirmation',now()->addMinutes(1440), $customer->id);

        $data = [
            'id' => $customer -> id,
            'name' => $customer -> fullname,
            'email' => $customer -> email,
            'link' => $signedRoute
        ];

        Mail::to($customer->email)->send(new PaymentMail($data));

        Return redirect()->route('home')->with('success', 'Email is successfully sent to the customer');
    }


    public function show($id)
    {
        $reservation = Reservation::where('id', $id)->firsOrFail();
        return view('frontend.confirmation', ['reservations' => $reservations] );
    }


}
