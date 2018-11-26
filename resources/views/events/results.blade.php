@extends ('layouts.master')
@section ('content')
<div class="wide-container">
	<div>
		showing results for <strong>{{$searchResult}}</strong>
	</div>
	<br>
	<br>
	<div class="brand-overall-box">
			@foreach ($events->slice(0,4) as $event)
				@include ('events.event')
			@endforeach
		</div>
</div>



@endsection ('content')