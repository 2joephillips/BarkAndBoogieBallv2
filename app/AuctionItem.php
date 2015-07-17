<?php

namespace Todo;

use Illuminate\Database\Eloquent\Model;

class AuctionItem extends Model
{
    protected $fillable = [
        'transactionDate',
        'nameOfActionItem',
        'itemId',
        'auctionDescription',
        'auctionValue' ,
        'auctionDonor' ,
        'auctionLocation' ,
        'auctionNotes',
        'attendee_id',
        'winningBid'
    ];

}
