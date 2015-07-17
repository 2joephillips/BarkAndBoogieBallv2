<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = array('seat_id','lastname','firstname',
        'phone','email','paidinfull', 'balance','notes');
}
