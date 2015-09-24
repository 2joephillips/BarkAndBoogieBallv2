<?php

namespace Todo\Http\Controllers;

use Illuminate\Http\Request;

use Todo\Http\Requests;
use Todo\Attendee;
use Mail;

class EmailController extends Controller
{

    private $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        abort(500);
    }

    public function show($id)
    {
        $attendee = Attendee::with('seat','item')->find($id);

        $Msgdata = array(
            'name'=>$attendee->firstname,
            'email'=>$attendee->email,
            'items'=>$attendee->item
        );

        Mail::send('emails.test',
            $Msgdata,
             function($message) use ($attendee) {$message->to($attendee->email)->subject('Bark and Boogie Ball Receipt:');
         });

        return $attendee;
    }
}
