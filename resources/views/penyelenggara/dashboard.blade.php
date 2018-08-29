@extends('penyelenggara.layout')

@section('title') Dashboard @endsection

@section('header')

	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
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
				<li class="nav-item">
					<a class="nav-link" href="#">User</a>
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
					
				</div>
			</div>
		</div>
	</div>

@endsection