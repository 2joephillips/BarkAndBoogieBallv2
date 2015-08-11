<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = array('table_number', 'seat_number', 'attendees_id');


    public function attendee() {
        return $this->belongsTo('Attendee');
    }
}
