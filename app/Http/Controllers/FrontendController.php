<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedClient;
use App\Models\Event;

class FrontendController extends Controller
{
    public function index()
    {
        $clients = FeaturedClient::get();
        $events = Event::all();
        return view('frontend.home', compact('clients', 'events'));
    }
}
