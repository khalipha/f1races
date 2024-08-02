<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Races;
use App\Http\Controllers\Carbon\Carbon;
use DB;
use Response;

class Controller extends BaseController
{

    public function UpdateRacesView()
    {
        $someVariable = date("Y-m-d H:i",strtotime('2 hour'));
        $races = DB::select( DB::raw("select * from races where RaceTime > :somevariable"), array(
            'somevariable' => $someVariable,
           ));

        return view('RaceViews.updateRaceResults',compact('races'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function testView()
    {
        // $races = DB::table('races')
        // ->where('RaceId', '=', 1)
        // ->get();

        // return $races;

    //     $mytime = Carbon\Carbon::now();
    //    echo $mytime->toDateTimeString();
    }
    
}
