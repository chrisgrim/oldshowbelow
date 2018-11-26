
@extends('layouts.master')

@section('content')
<div id="register">
@include('layouts.default-left')
<center>
<div class="container">
    <div class="register-content">
        <div class="register-header">
            @include ('layouts.error')
            <h2>
                New Event
            </h2> 
        </div>
        <div class="">
            <div class="form-container">
                <form method="POST" action="{{ route('store_event') }}" enctype="multipart/form-data">
                @csrf
                    <div>
                        <input type="eventTitle" name="eventTitle" value="{{ old('eventTitle') }}" required>
                        <label>Event Title</label>
                    </div>
                    <div>
                        <textarea type="eventDescription" name="eventDescription" class="text-area" placeholder="Tell Us About The Brand" value="{{ old('eventDescription') }}" required></textarea>
                    </div>
                    <br>
                    <div>
                        <input name="eventWebsite" value="{{ old('eventWebsite') }}" required>
                        <label>Event Website</label>
                    </div>
                    <div>
                        <input name="eventPrice" value="{{ old('eventPrice') }}" required>
                        <label>Event Price</label>
                    </div>
                    <div>
                        <input name="eventTicketUrl" value="{{ old('eventTicketUrl') }}" required>
                        <label>Event ticket url</label>
                    </div>
                    <div>
                        <div id="locationField">
                           <input class="form-control" id="autocomplete" type="text" placeholder="Enter Address to Store..." name="term">
                        </div>
                    </div>
                    <div class="hiddenAddress">
                        <input name="eventStreetNumber" id="street_number"></input>
                        <input name="eventStreetAddress" id="route"></input>
                        <input name="eventCity" id="locality"></input>
                        <input name="eventState" id="administrative_area_level_1"></input>
                        <input name="eventZipcode" id="postal_code"></input>
                        <input name="eventCountry" id="country"></input>
                        <input name="eventLat" id="latbox"></input>
                        <input name="eventLong" id="lngbox"></input>
                    </div>


                    <div>
                        <input type="file" name="eventImage" accept="image/*">
                    </div>
                    <div>
                        <button type="submit" class="register-button-main">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</center>
</div>
@endsection


