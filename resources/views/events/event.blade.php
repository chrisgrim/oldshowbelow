
<div>
	<a href="{{route('event_names', $event->slug)}}">
		<div>
			<div class="brand-image">
				<div class="brand-background-image" style="width: 100%; height: 100%; background-size: cover; background-repeat: no-repeat; background-image: url('/storage/{{ $event->thumbImagePath }}');">
					<div>
					</div>
				</div>
			</div>
			<div class="brand-title">	
				{{ $event->eventTitle }}
			</div>
			<div class="brand-info">
				{{ str_limit($event->eventDescription, 45) }}
			</div>
			@if ($event->overall_rating == 0)
			<div>
			</div>
			@else
			<div>

			</div>
			@endif
		</div>
	</a>
	@can ('update', $event)
	<div class="coupon-button-section code">
		<a href="#open-coupon-modal-{{$event->slug}}">
			<button class="coupon-submit-button">
				Delete
			</button>
		</a>
	</div>
	<div id="open-coupon-modal-{{$event->slug}}" class="modal-window">
		<div class="modal-box">
			<div class="modal-top">
				<a href="#modal-close" title="Close" class="modal-close">Close</a>
				<div>
					<h3>Are you Sure you want to delete?</h3>
				</div>
				<div>
					<form action="{{ route('delete_event', $event->slug)}}" method="POST">
						@csrf
						{{ method_field('DELETE') }}
						<button>Delete</button>
					</form>
				</div>
			</div>
		</div>
		</div>
	@endcan
</div>