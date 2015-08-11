<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = array('lastname','firstname','company',
        'phone','email','paidinfull', 'balance','notes');


    public function seat() {
        return $this->hasOne('Todo\Seat');
    }
}
