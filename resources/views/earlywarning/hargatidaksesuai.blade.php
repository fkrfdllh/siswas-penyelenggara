<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Daftar Harga Tidak Sesuai</title>

		<!-- JS -->
		<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>

		<!-- CSS -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.min.css') }}">

		<!-- Custom JS -->
		<script type="text/javascript">
			$(document).ready(function() {
				$(".dropdown-trigger").dropdown();
				$(".dropdown-trigger").dropdown({
					hover: true,
					constrainWidth: true,
					coverTrigger: false,
				});
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('select').formSelect();
			});
		</script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('.datepicker').datepicker();
				$('.datepicker').datepicker({
					format: 'd mmmm yyyy'
				});
			});
		</script>
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

		<div class="section"></div>

		<blockquote><h5>Daftar Harga Tidak Sesuai</h5></blockquote>

		<div class="row">
			<div class="col s3">
				<div class="input-field col s12">
					<select>
						<option value="" disabled selected>Penyelenggara SPA</option>
						<option value="1">PT Varia Solusi Integrasi</option>
						<option value="2">PT IDStar</option>
						<option value="2">PT Facebook</option>
					</select>
					<label>Pilih Penyelenggara SPA</label>
				</div>
			</div>
			<div class="col s3">
				<div class="input-field col s12">
					<select>
						<option value="" disabled selected>Sistem Trading</option>
						<option value="1">Meta Trader 4</option>
					</select>
					<label>Pilih Sistem Trading</label>
				</div>
			</div>
			<div class="col s3">
				<div class="input-field col s12">
					<i class="material-icons prefix">date_range</i>
					<input id="tanggal" type="text" class="datepicker">
					<label for="tanggal">Tanggal</label>
				</div>
			</div>
		</div>
	</body>

</html>