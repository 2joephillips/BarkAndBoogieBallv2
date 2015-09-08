<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = array('table_number', 'seat_number','auctionId');


    protected $guarded = array('*');

    public function attendee() {
        return $this->hasOne('Todo\Attendee');
    }
}
