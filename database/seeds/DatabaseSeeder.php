<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Todo\AuctionItem;
use Todo\Seat;
use Todo\Attendee;

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
        $this->call('UploadAuctionItemSeeder');
        $this->call('UploadTableSeeder');
        $this->call('UploadAttendeesSeeder');
        Model::reguard();
    }
}


class UploadAuctionItemSeeder extends Seeder
{
    protected function getDir()
    {
        $rc = new ReflectionClass(get_class($this));
        return dirname($rc->getFileName());
    }

    public function run()
    {
        DB::table('auction_items')->delete();

        AuctionItem::truncate();

        $AuctionItems = array();
        $lexer = new Lexer(new LexerConfig());
        $interpreter = new Interpreter();
        $interpreter->addObserver(
            function (array $row) use (&$AuctionItems) {

                $ItemOne = Auctionitem::create(
                    array(
                        'transactionDate'			=> $row[0],
                        'itemId'					=> $row[1],
                        'nameofActionItem'			=> $row[2],
                        'auctionDescription'		=> $row[3],
                        'auctionValue'				=> $row[4],
                        'auctionDonor'				=> $row[5],
                        'auctionLocation'			=> $row[6],
                        'auctionNotes'				=> $row[7]

                    ));

                $this->command->info("Added " . $row[1] . " item and.");
            });

        $fileName = $this->getDir() . '/Auction Items.csv';
        $lexer->parse($fileName, $interpreter);
    }
}

class UploadTableSeeder extends Seeder
{
    protected function getDir()
    {
        $rc = new ReflectionClass(get_class($this));
        return dirname($rc->getFileName());
    }

    public function run()
    {
        DB::table('seats')->delete();
        Seat::truncate();

        $Seats = array();
        $lexer = new Lexer(new LexerConfig());
        $interpreter = new Interpreter();
        $interpreter->addObserver(
            function(array $row) use ($Seats) {
                $ItemOne = \Todo\Seat::create(
                    array(
                        'table_number'  => $row[0],
                        'seat_number'   => $row[1],
                        'auctionId'     => $row[2]

                    ));

                $this->command->info("Added Auction Id for seat and table" . $row[2]);
            });

        $fileName = $this->getDir() . '/Seats.csv';
        $lexer->parse($fileName, $interpreter);
    }
}

class UploadAttendeesSeeder extends Seeder
{
    protected function getDir()
    {
        $rc = new ReflectionClass(get_class($this));
        return dirname($rc->getFileName());
    }

    public function run()
    {
        $Attendees = array();
        $lexer = new Lexer(new LexerConfig());
        $interpreter = new Interpreter();
        $interpreter->addObserver(
            function (array $row) use ($Attendees) {
                $ItemOne = \Todo\Attendee::create(
                    array(
                        'company' 		=> $row[0],
                        'lastname' 		=> $row[1],
                        'firstname' 	=> $row[2],
                        'phone' 		=> $row[3],
                        'email' 		=> $row[4],
                        'paidinfull' 	=> $row[5],
                        'balance'       => $row[6],
                        'notes' 		=> $row[7],
                        'seat_id'       => $row[8]
                    )
                );
                $this->command->info("Added " . $row[1] . "item and attached to attendee");
            }
        );
        $fileName = $this->getDir() . '/Attendees.csv';
        $lexer->parse($fileName, $interpreter);
    }


}