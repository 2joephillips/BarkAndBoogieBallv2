<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AuctionItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_items', function(Blueprint $table)
        {
            $table->increments('id');
            $table->date('transactionDate');
            $table->string('itemId');
            $table->string('nameOfActionItem');
            $table->string('auctionDescription');
            $table->integer('auctionValue');
            $table->string('auctionDonor');
            $table->string('auctionLocation');
            $table->string('auctionNotes');
            $table->string('winningBid');
            $table->integer('attendee_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auction_items');
    }
}
