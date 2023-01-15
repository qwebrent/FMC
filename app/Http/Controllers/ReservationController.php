<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\Event;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pending()
    {
        $reservations = Reservation::where('isConfirmed', '=', 0)->get();
        return view('backend.reservations.pending', compact('reservations'));
    }

    public function finished()
    {
        $reservations = Reservation::where('isFinished', '=', 1)->get();
        return view('backend.reservations.finished', compact('reservations'));
    }

    public function confirmed()
    {
        $reservations = Reservation::where('isConfirmed', '=', 1)->get();
        return view('backend.reservations.confirmed', compact('reservations'));
    }

    public function refused()
    {
        $reservations = Reservation::where('isRefused', '=', 1)->get();
        return view('backend.reservations.refused', compact('reservations'));
    }

    public function ongoing()
    {
        $reservations = Reservation::where('isOngoing', '=', 1)->get();
        return view('backend.reservations.ongoing', compact('reservations'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        return view('frontend.service-packages.reservationform', compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation = Reservation::create([
            'lname'=>$request->lname,
            'fname'=>$request->fname,
            'mname'=>$request->mname,
            'fullname'=>$request->fname.' '.$request->mname.' '.$request->lname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'event_type'=>$request->event_type,
            'event_date'=>$request->event_date,
            'package'=>$request->package,
            'persons'=>$request->persons,
            'message'=>$request->message,
        ]);


        $events = Event::all();
        return view('frontend.prompt', compact('events'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::where('id', $id)->firstOrFail();
        return view('backend.modals.pendingModal', compact('$reservation'));
    }


    public function showConfirmed($id)
    {
        $reservation = Reservation::where('id', $id)->firstOrFail();
        return vuew('backend.modals.confirmedModal', compact('$reservation'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function confirmReservation($id)
    {
        $reservation = Reservation::where('id', '=', $id)->first()->update(['isConfirmed' => 1]);
        return redirect()->route('reservation.confirmed');
    }

    public function moveToPendingPayment($id)
    {
        $reservation = Reservation::where('id', '=', $id)->first()->update(['isConfirmed' => 2, 'isPaymentPending' => 1]);

        return redirect()->route('home')->with('success', 'The reservation was moved to Pending under the Payment Tab');
    }

    public function moveToFinished($id)
    {
        $reservation = Reservation::where('id', '=', $id)->first()->update(['isFinished' => 1, 'isOngoing' => 0]);
        return redirect()->route('home')->with('success', 'Reservation is done, Good Job!');
    }
    // public function refusedReservation($id)
    // {
    //     $reservation = Reservation::where('id', '=', $id)->first()->update([
    //         'isConfirmed' => 0,
    //         'isPaymentPending' => 0,
    //         'isRefused' => 1,
    //     ]);
    // }

    public function moveToOngoing($id)
    {
        $reservation = Reservation::where('id', '=', $id)->first()->update([
            'isOngoing' => 1,
            'isPaymentPending' => 2
        ]);

        return redirect()->route('home')->with('success', 'Reservation is now ongoing. Check the reservation under the ongoing tab.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservations = Reservation::findOrFail($id)->delete();
        return redirect()->route('home');
    }

    public function restore($id)
    {
        $reservations = Reservation::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back();
    }

    public function showRefused()
    {
        $refusedReservations = Reservation::onlyTrashed()->get();
        return view('backend.reservations.refused', compact('refusedReservations'));
    }
}
