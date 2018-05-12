<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Event;
use Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('events.index')->withEvents($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate data
        $this->validate($request, [
            'title' => 'required|max:50',
            'date' => 'required',
            'body' => 'required|min:10|max:400'
        ]);

        // Store data
        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->body = $request->body;

        $event->save();

        Session::flash('success', 'A new Event was successfully saved!');

        // Redirect
        return redirect()->route('events.show', $event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);

        return view('events.show')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);

        return view('events.edit')->withEvent($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate data
        $this->validate($request, [
            'title' => 'required|max:50',
            'date' => 'required',
            'body' => 'required|min:10|max:400'
        ]);

        // Store data
        $event = Event::find($id);

        $event->title = $request->input('title');
        $event->date = $request->input('date');
        $event->body = $request->input('body');

        $event->save();

        Session::flash('success', 'A new Event was successfully updated!');

        // Redirect
        return redirect()->route('events.show', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        
        $event->delete();
        
        Session::flash('success', 'The event was successfully deleted!');
        
        return redirect()->route('events.index');
    }
}
