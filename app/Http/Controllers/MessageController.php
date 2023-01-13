<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Contact;
use App\Models\Event;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // Retrieve the messages
      $messages = Message::all();

      // Pass the messages to the view
      return view('backend.manageWebsite.messages')->with('messages', $messages);
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
         // Validate the input
      $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
      ]);

      // Create a new message
      $message = new Message();
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->phone = $request->input('phone');
      $message->subject = $request->input('subject');
      $message->message = $request->input('message');

     $message->save();

     $contactus = Contact::first();
     $events = Event::all();
      // Redirect the user back to the frontend with a success message
      return redirect()->route('frontend.contact', compact('contactus', 'events'))->with('success', 'Your message has been received!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::find($id);

        // Delete the message
        $message->delete();

        // Redirect the user back to the backend with a success message
        return redirect()->route('backend.message')->with('success', 'The message has been deleted!');
    }
}
