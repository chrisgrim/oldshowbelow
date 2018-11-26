<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
    	'eventTitle','eventDescription','eventWebsite','eventPrice','eventTicketUrl','eventStreetNumber','eventCity','eventState','eventCountry','eventZipcode','slug','eventImagePath','thumbImagePath','eventLong','eventLat','user_id', 'eventStreetAddress',

    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
