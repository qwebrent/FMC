<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeaturedClient;

class FrontendController extends Controller
{
    public function index()
    {
        $clients = FeaturedClient::get();
        return view('frontend.home', compact('clients'));
    }
}
