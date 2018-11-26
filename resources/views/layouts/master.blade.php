<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
	@include ('layouts.meta')
	<title>Show Below</title>
	<script src="\js\app.js" defer></script>
	<!-- <script src="\js\googleSearch.js" defer></script> -->
	<script src="\js\navSearch.js" defer></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="\css\app.css">
	<script src="https://unpkg.com/vue-star-rating/dist/star-rating.min.js"></script>
	@yield('head')
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">

</head>
	<body>
		<div id="app">
		<section id="site-container">
		@include ('layouts.nav')
		<main>
		@yield ('content')
		<flash message="{{ session('flash') }}"></flash>
		</main>
		@include ('layouts.footer')
		</section>
		</div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi5THKxUVFMVrEMfl-2D03CCXNTkSavmI&libraries=places" async defer></script>
	</body>
</html>