
@extends('layouts.master')

@section('content')
<div class="container">
	
	<div id="locationField">
  <input id="autocomplete" placeholder="Enter your address" type="text"></input>
</div>
<br>
<br>

<table id="address">
  <tr>
    <input class="field" id="street_number" disabled="true"></input>
    <input class="field" id="route" disabled="true"></input>
    <input class="field" id="locality" disabled="true"></input>
    <input class="field" id="administrative_area_level_1" disabled="true"></input>
    <input class="field" id="postal_code" disabled="true"></input>
    <input class="field" id="country" disabled="true"></input>
  </tr>
</table>
<table id="latlng">
<tr>
<input class="field" id="latbox" disabled="true"></input>
<input class="field" id="lngbox" disabled="true"></input>
</tr>
</table>



</div>
@endsection