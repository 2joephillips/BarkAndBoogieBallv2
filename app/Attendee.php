<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $fillable = array('lastname','firstname',
               'phone','email','paidinfull', 'balance','notes');

    protected $guarded = array('*');

    public function seat()
    {
        return $this->hasOne('Todo\Seat');
    }
}
