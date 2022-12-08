<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function pending()
    {
        $reservations = Reservation::where('isPaymentPending', '=', 1)->get();
        return view('backend.payment.pending', compact('reservations'));
    }

    public function confirmed()
    {
        $reservations = Reservation::where('isPaymentPending', '=', 2)->get();
        return view('backend.payment.confirmed', compact('reservations'));
    }
    public function paymentForm($id)
    {
        $reservation = Reservation::where('id', $id)->firstOrFail();
        return view('frontend.paymentConfirmation', compact('reservation'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = Payment::create([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'email' => $request->email,
            'event_type' => $request->event_type,
            'event_date' => $request->event_date,
            'modeOfPayment' => $request->modeOfPayment,
            'referenceNum' => $request->referenceNum,
        ])-> id;


        $reservation = Reservation::where('id', '=', $test)->first()->update([
            'isOngoing' => 1,
            'isPaymentPending' => 2
        ]);


        return redirect()->route('confirmedPaymentTable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function pendingPayment($id)
    {
        $reservations = Reservation::where('id', $id)->firstOrFail();
        return view('frontend.confirmation', compact('reservations'));
    }

    public function toOngoingTable($id)
    {
        $reservation = Reservation::where('id', '=', $id)->first()->update(['isOngoing' => 1]);
        return $reservation;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
