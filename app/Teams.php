<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $primaryKey = 'TeamId';
    protected $table = 'teams'; 
    protected $fillable = array('TeamName','TeamLeader','TeamMember','Nationality');
}
