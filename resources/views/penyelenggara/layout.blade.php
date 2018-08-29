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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom JS -->
    <script type="text/javascript">
		$(document).ready(function() {
			// chart.canvas.parentNode.style.height = '100px';


			var ctx = document.getElementById("pieChart").getContext("2d");

			var pieChart = new Chart(ctx, {
				responsive: true,
				maintainAspectRatio: false,
				type: 'pie',
				data: {
					labels: ["Aktif", "Tidak Aktif"],
					datasets: [{
						data: [90, 10],
						backgroundColor: [
							'rgb(46, 204, 113)',
							'rgb(231, 76, 60)',
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

	<!-- Custom CSS -->
	<!-- <style type="text/css">
		body {
			background-image: url('{{ asset('images/scenery.jpeg') }}');
			background-size: cover;
			background-repeat: no-repeat;
		}
	</style> -->
</head>
<body>
    @yield('header')

    @yield('content')

    @yield('footer')
</body>
</html>
