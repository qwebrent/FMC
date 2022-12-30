<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Reservation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ongoing = Reservation::where('isOngoing', '=', 1)->count();
        $finished = Reservation::where('isFinished', '=', 1)->count();
        return view('home', compact('ongoing', 'finished'));
    }


    public function carousel()
    {

    }
}
