<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use DB;
use Response;

class eventsController extends Controller
{
 
    public function index()
    {
        $events = Events::latest()->paginate(10);
        return view('EventViews.index',compact('events'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        return view('EventViews.create');
    }

  
    public function store(Request $request)
    {
        request()->validate([

            'EventName'         => 'required',
            'EventVenue'        => 'required',
            'EventStartTime'    => 'required',
            'EventEndTime'      => 'required'

        ]);

        $events = Events::create([
            'EventName'      => $request->EventName,
            'EventVenue'     => $request->EventVenue,
            'EventStartTime' => date("Y-m-d H:i",strtotime($request->EventStartTime)),
            'EventEndTime'   => date("Y-m-d H:i",strtotime($request->EventEndTime)),
         ]);

        return redirect()->route('events.index')->with('success','Event created successfully');
    }


    public function show($EventId)
    {
           $events = Events::find($EventId);
           return view('EventViews.show',compact('events'));
    }

    public function edit($EventId)
    {
        $event = Events::find($EventId);
        return view('EventViews.edit',compact('event'));
    }

    public function update(Request $request, $EventId)
    {
        request()->validate([

            'EventName'         => 'required',
            'EventVenue'        => 'required',
            'EventStartTime'    => 'required',
            'EventEndTime'      => 'required'

        ]);
       // Events::find($EventId)->update($request->all());

        DB::table('events')->where('EventId',$EventId)->update([
            'EventName'                     => $request->EventName,
            'EventVenue'                    => $request->EventVenue,
            'EventStartTime'                => date("Y-m-d H:i",strtotime($request->EventStartTime)),
            'EventEndTime'                  => date("Y-m-d H:i",strtotime($request->EventEndTime)),
       ]);

        return redirect()->route('events.index')->with('success','Event updated successfully');
    }


    public function destroy($EventId)
    {
        $event = Events::find($EventId);
        $event->delete();
        return redirect()->route('events.index')
          ->with('Success', 'Event deleted successfully');
    }
}
