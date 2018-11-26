		<logo>

	    	<div class="nav-bar-logo">
	    		<a href="/"><img src="/storage/SiteImages/ShowBelow_Logo.png" height="42" width="42"></a>
	    	</div>
	    	<div class="nav-bar-dropdown">
				<input id="check01" type="checkbox" name="menu" />
				<label for="check01"><img src="/SiteImages/ShowBelow_Logo.png" height="42" width="42">
					<div class="down-arrow">
						<div class="down-arrow-rotate">
							<svg viewBox="0 0 18 18" role="presentation" style="height: 1em; width: 1em; display: block; fill: currentcolor;"><path d="m16.29 4.3a1 1 0 1 1 1.41 1.42l-8 8a1 1 0 0 1 -1.41 0l-8-8a1 1 0 1 1 1.41-1.42l7.29 7.29z"></path></svg>
						</div>
					</div>
				</label>
				
					<ul class="submenu">
						<div class="drop-menus">
							<li class="menu-item">
								<a href="/">
									Home
									<img src="/SiteImages/ShowBelow_Logo.png" height="42" width="42" class="drop-down-image">
								</a>
							</li>
							@guest
							<li class="menu-item">
								<a href="{{ route('login') }}">
									{{ __('Login') }}
								</a>
							</li>
							<li class="menu-item">
								<a href="{{ route('register') }}">
									{{ __('Register') }}
								</a>
							</li>
							<li class="menu-item">
								<a href="{{ url('/contactus') }}">
									Contact Us
								</a>
							</li>
							@else
							@if (Auth::user())
								<li class="menu-item">
									<a href="{{ url('/contactus') }}">
										Contact Us
									</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('profile', Auth::user()) }}">
										Profile
									</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('logout') }}"
		                                       onclick="event.preventDefault();
		                                                     document.getElementById('logout-form').submit();">
		                                        {{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
									</form>
								</li>
							@endif
							@endguest
							
						</div>
					</ul>	
			</div>


		</logo>
		<search>
		  	<div class="search-bar">
				<form method="GET" id="my-form" action="/search">
			        <input class="form-control" id="address" placeholder="Search..." name="term" onFocus="geo()">
			        <input id="latitude" type="hidden" name="latitude">
			        <input id="longitude" type="hidden" name="longitude">
			    </form>

		    </div>
	    </search>
	    <login>
	    	<div class="nav-bar-logo">
	    		<div class="nav-login-register">
					@guest
					<div class="login-nav">
						<a href="{{ route('login') }}">{{ __('Login') }}</a>
					</div>
					<div class="login-nav">
						<a href="{{ route('register') }}">{{ __('Register') }}</a>
					</div>
					<div class="login-nav">
						<a href="{{ url('/contactus') }}">Contact Us</a>
					</div>
					<div class="login-nav">
						<a href="{{ url('/events/create') }}">Create</a>
					</div>
				@else
				@if (Auth::user())
					
					<div class="menu-item">
						<a href="{{ url('/contactus') }}">Contact Us</a>
					</div>
	        		<div class="menu-item">
						<a href="{{ route('profile', Auth::user()) }}">
							Profile
						</a>
					</div>
					<div class="menu-item">
						<a href="{{ route('logout') }}"
		                                       onclick="event.preventDefault();
		                                                     document.getElementById('logout-form').submit();">
		                                        {{ __('Logout') }}
						</a>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
						</form>
						</div>
						
				@endif
				@endguest
				</div>
			</div>
	    </login>
