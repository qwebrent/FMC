<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Event;
use App\Models\Reservation;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::all();
        return view('frontend.service-packages.package8', compact('events'));
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
            'isCustomized'=>1,
        ]) -> id;

        $menu = Menu::create([
            'reservation_id'=>$reservation,
            'pork'=>$request->pork,
            'chicken'=>$request->chicken,
            'vegetable'=>$request->vegetable,
            'beef'=>$request->beef,
            'sea_food'=>$request->sea_food,
            'desserts'=>$request->desserts,
        ]);

        $events = Event::all();

        return view('frontend.prompt', compact('events'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
