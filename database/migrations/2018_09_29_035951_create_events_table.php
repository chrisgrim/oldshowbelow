<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('eventTitle')->unique();
            $table->string('slug')->unique();
            $table->string('eventDescription');
            $table->string('eventWebsite');
            $table->integer('eventPrice');
            $table->string('eventTicketUrl')->nullable();
            $table->string('eventStreetNumber')->nullable();
            $table->string('eventStreetAddress')->nullable();
            $table->string('eventCity');
            $table->string('eventState');
            $table->string('eventCountry');
            $table->string('eventZipcode')->nullable();
            $table->string('eventLong')->nullable();
            $table->string('eventLat')->nullable();
            $table->string('overallRating')->default(0);
            $table->string('eventImagePath');
            $table->string('thumbImagePath')->nullable();
            $table->boolean('approved')->default(false);
            $table->integer('visitors')->default(0);
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
        Schema::dropIfExists('events');
    }
}
