<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = array('lastname','firstname', 'company', 'checkedIn', 'checkedOut',
               'phone','email','paidinfull', 'balance','notes', 'seat_id','paymentType' , 'checkNumber');


    public function seat()
    {
        return $this->belongsTo('Todo\Seat');
    }

    public function item()
    {
        return $this->hasMany('Todo\AuctionItem');
    }
}
