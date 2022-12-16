<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['departure_place', 'arrival_place', 'departure_time', 'arrival_time', 'id_bus'];
}
