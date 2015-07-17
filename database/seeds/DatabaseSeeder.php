<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Todo\AuctionItem;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('UserTableSeeder');
        $this->call('AuctionItemSeeder');
    }
}

    class AuctionItemSeeder extends Seeder {

        public function run()
        {
           DB::table('auction_items')->delete();
            AuctionItem::truncate();

            AuctionItem::create(array(
                'transactionDate'			=> \Carbon\Carbon::now(),
                'itemId'					=> 1,
                'nameofActionItem'			=> 'test1',
                'auctionDescription'		=> 'Kinda Fancy',
                'auctionValue'				=> '100',
                'auctionDonor'				=> 'John Doe',
                'auctionLocation'			=> '',
                'auctionNotes'				=> ''
            ));

            AuctionItem::create(array(
                'transactionDate'			=> \Carbon\Carbon::now(),
                'itemId'					=> 2,
                'nameofActionItem'			=> 'test2',
                'auctionDescription'		=> 'Really Fancy',
                'auctionValue'				=> '100',
                'auctionDonor'				=> 'John Moe',
                'auctionLocation'			=> 'Home',
                'auctionNotes'				=> 'Not fancy at all.'
            ));
        }
}
