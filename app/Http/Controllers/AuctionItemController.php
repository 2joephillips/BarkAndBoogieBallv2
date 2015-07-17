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
        return AuctionItem::all();
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
        $data = Request::all();
        $item->fill($data);
        $item->save();
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
