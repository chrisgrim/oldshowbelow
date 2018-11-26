@extends ('layouts.master')
@section ('content')
<div class="wide-container">
	<div class="brand-overall-box">
			@foreach ($events as $event)
				@include ('events.event')
			@endforeach

		</div>
		{{ $events->links() }}
</div>




@endsection ('content')