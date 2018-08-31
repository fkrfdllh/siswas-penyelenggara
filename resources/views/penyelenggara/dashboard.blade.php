@extends('penyelenggara.layout')

@section('title') Dashboard @endsection

@section('header')

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<img src="{{ asset('images/bappebti.png') }}" class="img-fluid" style="max-width: 10%; max-height: 10%">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Anda Masuk Sebagai User</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<br>

@endsection

@section('content')

	<div class="container-fluid">
		<div class="row">
			<div class="col">
				<div class="jumbotron">
					<div class="card">
						<div class="card-body">
							<div class="row align-items-center justify-content-center">
								<div class="col-3">
									<h4>Log Jurnal</h4>
								</div>	
								<div class="col-9">
									<input id="datepicker" type="text">
								</div>
							</div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<canvas id="statusChart"></canvas>
						</div>
					</div>
					<br>
					<table class="table table-bordered table-light">
						<thead class="bg-secondary text-light">
							<tr>
								<th scope="col">No.</th>
								<th scope="col">Penyelenggara SPA</th>
								<th scope="col">Sistem Trading</th>
								<th scope="col">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>PT Varia Solusi Integrasi</td>
								<td>Meta Trader 4</td>
								<td class="bg-success text-light">Lengkap</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>PT IDStar</td>
								<td>Meta Trader 4</td>
								<td class="bg-success text-light">Lengkap</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>PT Facebook</td>
								<td>Meta Trader 4</td>
								<td class="bg-danger text-light">Tidak Lengkap</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="col">
				<div class="jumbotron">
					
				</div>
			</div>
		</div>
	</div>

@endsection