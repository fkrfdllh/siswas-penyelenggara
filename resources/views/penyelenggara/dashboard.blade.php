@extends('penyelenggara.layout')

@section('title') Dashboard @endsection

@section('header')

	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #F9690E">
		<!-- <img src="{{ asset('images/bappebti.png') }}" class="img-fluid" style="max-width: 10%; max-height: 10%"> -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Anda Masuk Sebagai User</a>
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
				<div class="jumbotron bg-light" style="border-style: solid; border-color: #BDC3C7;">
					<div class="card">
						<div class="card-body">
							<div class="row mx-auto">
								<div class="col-3">
									<h4>Log Jurnal</h4>
								</div>	
								<div class="col-9">
									<input id="datepicker" type="text" disabled>
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
				<div class="jumbotron bg-light" style="border-style: solid; border-color: #BDC3C7;">
					<div class="card">
						<div class="card-body">
							<div class="row mx-auto">
								<div class="col-4">
									<h4>Early Warning</h4>
								</div>	
								<div class="col-8">
									<input id="datepicker2" type="text" disabled>
								</div>
							</div>
						</div>
					</div>
					<br>
					<table class="table table-striped table-light">
						<tr>
							<td class="text-danger">Server Penyelenggara Luar Negeri</td>
							<td class="ml-auto text-danger"><span class="badge badge-pill bg-warning">2</span></td>
						</tr>
						<tr>
							<td class="text-danger">Harga Tidak Sesuai</td>
							<td class="ml-auto text-danger"><span class="badge badge-pill bg-warning">2.403</span></td>
						</tr>
						<tr>
							<td>Spread Tidak Wajar</td>
							<td class="ml-auto text-white"><span class="badge badge-pill bg-secondary">0</span></td>
						</tr>
						<tr>
							<td class="text-danger">Produk Belum Terdaftar</td>
							<td class="ml-auto text-danger"><span class="badge badge-pill bg-warning">655</span></td>
						</tr>
						<tr>
							<td class="text-danger">Plugin Baru</td>
							<td class="ml-auto text-danger"><span class="badge badge-pill bg-warning">47</span></td>
						</tr>
						<tr>
							<td>Log Tidak Lengkap</td>
							<td class="ml-auto text-white"><span class="badge badge-pill bg-secondary">0</span></td>
						</tr>
						<tr>
							<td>Fraksi Transaksi</td>
							<td class="ml-auto text-white"><span class="badge badge-pill bg-secondary">0</span></td>
						</tr>
						<tr>
							<td>Volume kurang dari minimum</td>
							<td class="ml-auto text-white"><span class="badge badge-pill bg-secondary">0</span></td>
						</tr>
						<tr>
							<td class="text-danger">Volume lebih dari maksimum</td>
							<td class="ml-auto text-danger"><span class="badge badge-pill bg-warning">232</span></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection