<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>@yield('title')</title>

		<!-- JS -->
		<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

		<!-- CSS -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">

	</head>

	<body>

		<ul id="dropdownUser" class="dropdown-content">
			<li><a class="orange-text" href="#!">Keluar</a></li>
		</ul>
		<nav>
			<div class="nav-wrapper amber darken-4">
				<!-- <a href="#!" class="brand-logo">Logo</a> -->
				<ul class="right hide-on-med-and-down">
					<li><a class="dropdown-trigger" href="#!" data-target="dropdownUser">Anda Masuk Sebagai User<i class="material-icons right">arrow_drop_down</i></a></li>
				</ul>
			</div>
		</nav>

		@yield('content')

	</body>

</html>