@extends ('layouts.master')
@section ('content')


<div class="container">
	<div id="show-blade" itemscope itemtype="http://schema.org/Store"><meta itemprop="name" content="{{ $event->title }}"/>
		<show-center>
			@include ('events.showcontent')
		<show-side>
			<div class="brand-coupon-section">
				<div id="stickynav" class="unstuck">
					<div class="show-review-box">
					</div>
				</div>
			</div>
		</show-side>
	</div>
</div>

@endsection ('content')