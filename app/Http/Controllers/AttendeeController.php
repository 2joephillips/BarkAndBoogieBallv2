<?php

namespace Todo\Http\Controllers;

use Illuminate\Http\Request;

use Todo\Http\Requests;
use Todo\Attendee;

class AttendeeController extends Controller
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
        return Attendee::with('seat','item')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = $this->request->all();
        $attendee = new Attendee($input);
        if (!$attendee->save()) {
            abort(500, "Saving failed.");
        }
        return $attendee;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $attendee = Attendee::with('seat','item')->find($id);
        return $attendee;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $attendee = Attendee::find($id);

        $attendee->company = $this->request->input('company');
        $attendee->lastname = $this->request->input('lastname');
        $attendee->firstname = $this->request->input('firstname');
        $attendee->phone = $this->request->input('phone');
        $attendee->email = $this->request->input('email');
        $attendee->balance = $this->request->input('balance');
        $attendee->paidinfull = $this->request->input('paidinfull');
        $attendee->notes = $this->request->input('notes');
        $attendee->seat_id = $this->request->input('seat_id');
        $attendee->checkedIn = $this->request->input('checkedIn');
        $attendee->checkedOut = $this->request->input('checkedOut');
        $attendee->paymentType = $this->request->input('paymentType');
        $attendee->checkNumber = $this->request->input('checkNumber');
        if (!$attendee->save()) {
            abort(500, "Saving failed");
        }
        $attendee = Attendee::with('seat','item')->find($id);
        return $attendee;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $attendee = Attendee::find($id);
        $attendee->delete();
    }

    public function assignedAuctionItems()
    {
        return Attendee::with('item','seat')->get();

    }


}
