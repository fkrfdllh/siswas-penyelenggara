@extends('penyelenggara.layout')

@section('title') Dashboard @endsection

@section('header')

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Disabled</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<br>

@endsection

@section('content')

	<div class="row">
		<div class="col">
			<div class="container">
				<div class="jumbotron">
					<div class="row">
						<div class="col-5 offset-3">
							<canvas class="align-self-center" id="pieChart" width="200px" height="200px"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col">
			<div class="container">
				<div class="jumbotron">
					<table class="table table-hoverable">
						<thead>
							<tr>
								<th scope="col">Kategori</th>
								<th scope="col">Warning</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Sakit</td>
								<td>Menyakitkan</td>
							</tr>
							<tr>
								<td>Enak</td>
								<td>Mengenakkan</td>
							</tr>
							<tr>
								<td>Enak</td>
								<td>Mengenakkan</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

@endsection