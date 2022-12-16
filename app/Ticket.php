<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['description', 'price', 'status', 'id_place', 'id_user'];
}
