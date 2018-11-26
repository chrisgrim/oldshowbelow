<div id="show-content-intro">
				<show-intro-center>
					<div>
						<a href="{{$event->url}}">
							<img class="show-brand-image" src="/storage/{{ $event->thumbImagePath }}" alt="{{ $event->Title }}" title="{{ $event->Title }}" itemprop="image">
						</a>
					</div>
				</show-intro-center>
				<show-intro-side>
					<div class="brand-show-title">
						<h2>{{ $event->eventTitle }}</h2>
					</div>
					<div class="brand-show-review">
						<p>{{ $event->eventDescription }}</p>
					</div>
					<div class="show-intro-info">
						<div class="show-intro-elements">
							2 Reviews
						</div>
						<div class="show-intro-elements">
							2 Coupons
						</div>
						<div class="show-intro-elements">
							Pets
						</div>
						<div class="show-intro-elements">
							<div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" >
					
							</div>	
						</div>
					</div>					
				</show-intro-side>
			</div>
			<div class="show-body-content">
				<div class="show-brand-content">
					<div class="brand-intro">
						<h3>{{ $event->eventTitle }} Review</h3>
					</div>
					<div>
						<p>{{ $event->review }} </p>
					</div>
				</div>
			</div>
			<hr>

		</show-center>
