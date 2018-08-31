<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/Chart.min.js') }}"></script>
    <script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!-- Custom JS -->
    <script type="text/javascript">
		$(document).ready(function() {
			var ctx = document.getElementById("statusChart").getContext("2d");

			var pieChart = new Chart(ctx, {
				responsive: true,
				maintainAspectRatio: false,
				type: 'pie',
				data: {
					labels: ["Belum Ada", "Belum Lengkap", "Lengkap"],
					datasets: [{
						data: [15, 0, 85],
						backgroundColor: [
							'rgb(231, 76, 60)',
							'rgba(241, 196, 15,1.0)',
							'rgb(46, 204, 113)',
						],
					}],
					
					borderColor: [
		                'rgba(255,99,132,1)',
		                'rgba(54, 162, 235, 1)',
		            ],
		            borderWidth: 1
				}
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#datepicker').datepicker({
				format: 'dd mmmm yyyy'
			});
		});
	</script>
</head>
<body class="bg-white">
    @yield('header')

    @yield('content')

    @yield('footer')
</body>
</html>
