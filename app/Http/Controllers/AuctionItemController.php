<?php

namespace Todo\Http\Controllers;

use Illuminate\Http\Request;
use Todo\Http\Requests;
use Todo\AuctionItem;

class AuctionItemController extends Controller
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
        return AuctionItem::with('attendee.seat')->orderBy('itemId')->get();
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
        $item = new AuctionItem($input);
        if (!$item->save()) {
            abort(500, "Saving failed.");
        }
        return $item;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return AuctionItem::find($id);
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
        $item = AuctionItem::find($id);

        $item->nameOfActionItem = $this->request->input('nameOfActionItem');
        $item->auctionDescription = $this->request->input('auctionDescription');
        $item->auctionValue = $this->request->input('auctionValue');
        $item->auctionDonor = $this->request->input('auctionDonor');
        $item->auctionNotes = $this->request->input('auctionNotes');
        $item->attendee_id = $this->request->input('attendee_id');
        $item->winningBid = $this->request->input('winningBid');
        if (!$item->save()) {
            abort(500, "Saving failed");
        }
        $item = AuctionItem::with('attendee.seat')->find($id);
        return $item;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $item = AuctionItem::find($id);
        $item->delete();
    }
}
