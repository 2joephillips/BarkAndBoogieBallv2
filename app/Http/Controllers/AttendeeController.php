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
        return Attendee::with('seat')->get();
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
        $attendee = Attendee::with('seat')->find($id);
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
        //
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
}
