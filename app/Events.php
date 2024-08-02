<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Events extends Model
{
    protected $primaryKey = 'EventId';
    protected $table = 'events'; 
    protected $fillable = array('EventName','EventVenue','EventStartTime','EventEndTime');

}
