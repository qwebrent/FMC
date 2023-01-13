<?php

namespace App\Http\Controllers;

use App\Models\FeaturedClient;
use Illuminate\Http\Request;

class FeaturedClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $featuredClients = FeaturedClient::get();
        return view('backend.manageWebsite.featured', compact('featuredClients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.manageWebsite.addFeatured');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client' => 'required',
            'message' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $featuredclient = new FeaturedClient([
            'client' => $request->get('client'),
            'message' => $request->get('message'),
            'image' => $imageName
        ]);


        $featuredclient->save();
        return redirect()->route('backend.featured')->with('success', 'Featured Client saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeaturedClient  $featuredClient
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedClient $featuredClient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeaturedClient  $featuredClient
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $featuredClient = FeaturedClient::find($id);
        return view('backend.manageWebsite.editFeatured', compact('featuredClient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeaturedClient  $featuredClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'client' => 'required',
            'message' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $featuredClient = FeaturedClient::find($id);
        $featuredClient->client = $request->get('client');
        $featuredClient->message = $request->get('message');
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $featuredClient->image = $imageName;
        }

        // dd($featuredClient);
        $featuredClient->save();
        return redirect()->route('backend.featured')->with('success', 'Featured Client updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeaturedClient  $featuredClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeaturedClient $featuredClient)
    {
        //
    }
}
