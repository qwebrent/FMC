<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function packageOne(){
        return view('frontend.service-packages.package1');
    }

    public function packageTwo(){
        return view('frontend.service-packages.package2');
    }

    public function packageThree(){
        return view('frontend.service-packages.package3');
    }

    public function packageFour(){
        return view('frontend.service-packages.package4');
    }

    public function packageFive(){
        return view('frontend.service-packages.package5');
    }

    public function packageSix(){
        return view('frontend.service-packages.package6');
    }

    public function packageSeven(){
        return view('frontend.service-packages.package7');
    }

    public function packageEight(){
        return view('frontend.service-packages.package8');
    }




}
