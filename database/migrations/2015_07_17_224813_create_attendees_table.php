<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendees', function(Blueprint $table)
        {
            $table->increments('id');
            $table->boolean('checkedIn');
            $table->boolean('checkedOut');
            $table->string('company');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('phone');
            $table->string('email');
            $table->string('balance');
            $table->boolean('paidinfull');
            $table->longtext('notes');
            $table->integer('seat_id');
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
        Schema::drop('attendees');
    }
}
