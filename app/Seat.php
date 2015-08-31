<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = array('table_number', 'seat_number','auctionId','attendee_id');


    protected $guarded = array('*');

    public function attendee() {
        return $this->belongsTo('Todo\Attendee');
    }
}
