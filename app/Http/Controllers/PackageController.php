<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Price;
use App\Models\Event;

class PackageController extends Controller
{
    public function packageOne(){

        $price1 = Price::where('id', 1)->first();
        $events = Event::all();
        return view('frontend.service-packages.package1', compact('price1', 'events'));
    }

    public function packageTwo(){
        $price2 = Price::where('id', 2)->first();
        $events = Event::all();
        return view('frontend.service-packages.package2', compact('price2', 'events'));
    }

    public function packageThree(){
        $price3 = Price::where('id', 3)->first();
        $events = Event::all();
        return view('frontend.service-packages.package3', compact('price3', 'events'));
    }

    public function packageFour(){
        $price4 = Price::where('id', 4)->first();
        $events = Event::all();
        return view('frontend.service-packages.package4', compact('price4', 'events'));
    }

    public function packageFive(){
        $price5 = Price::where('id', 5)->first();
        $events = Event::all();
        return view('frontend.service-packages.package5', compact('price5', 'events'));
    }

    public function packageSix(){
        $price6 = Price::where('id', 6)->first();
        $events = Event::all();
        return view('frontend.service-packages.package6', compact('price6', 'events'));
    }

    public function packageSeven(){
         $price7 = Price::where('id', 7)->first();
         $events = Event::all();
        return view('frontend.service-packages.package7', compact('price7', 'events'));
    }

    public function packageEight(){

        return view('frontend.service-packages.package8');
    }




}
