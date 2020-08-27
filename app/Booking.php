<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['date_of_booking', 'no_of_people', 'no_of_nights'];
}