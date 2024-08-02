<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Races extends Model
{
   
    protected $primaryKey = 'RaceId';
    protected $table = 'races'; 
    protected $fillable = array('RaceName','RaceTime','RaceCoordinator');
}
