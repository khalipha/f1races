<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Races;
use DB;
use Response;

class racesController extends Controller
{
 
    public function index()
    {
        $someVariable = date("Y-m-d H:i",strtotime('2 hour'));
        $races = DB::select( DB::raw("select * from races where RaceTime < :somevariable"), array(
            'somevariable' => $someVariable,
           ));
       
        return view('RaceViews.index',compact('races'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create()
    {
        // return view('EventViews.create');
        //delete later
    }

  
    public function store(Request $request)
    {

        $races = Races::create([
            'RaceName'    => $request->RaceName,
            'RaceTime'    => date("Y-m-d H:i",strtotime($request->RaceTime)),
            'RaceCoordinator'  => $request->RaceCoordinator,
         ]);
  
         return redirect()->route('races.index')->with('success','Race created successfully');
    }


    public function show($RaceId)
    {
        //    $events = Events::find($EventId);
        //    return view('EventViews.show',compact('events'));
    }

    public function edit($RaceId)
    {

        
        $race = Races::find($RaceId);
        return view('RaceViews.edit',compact('race'));
    }

    public function update(Request $request, $RaceId)
    {

        DB::table('races')->where('RaceId',$RaceId)->update([
            'PodiumPositions'            => $request->PodiumPositions,
            'Results'                    => $request->Results,         
       ]);
       return redirect('/UpdateRaces');

    }


    public function destroy($RaceId)
    {
         //delete later
        // $event = Events::find($EventId);
        // $event->delete();
        // return redirect()->route('events.index')
        //   ->with('Success', 'Event deleted successfully');
    }
}
