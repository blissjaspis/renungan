@extends('layouts.app')

@section('content')
	<div class="container mt-4">

		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<img src="{{ asset('me.jpg') }}" alt="" style="height: 250px; width: 250px;">
				</div>
			</div>

			<div class="col-md-9">
				<h1 class="h1">Sesuatu yang Lebih Baik</h1>
				<p class="text-muted">Calvin B Rocks</p>

				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, non!</p>

				<div>
					<ul class="list-inline">
						<li class="list-inline-item"><h4 class="h4">Recent Episodes</h4></li>
						<li class="list-inline-item pl-3"><a href="#">View All</a></li>
					</ul>
				</div>

				<table class="table">
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Kekuasaan Dipulihkan</td>
							<td>25 June 2017</td>
							<td><a href="#" class="btn btn-success btn-sm" role="button">Lihat</a></td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Keadaan Buruk Adam Kedua</td>
							<td>24 June 2017</td>
							<td><a href="#" class="btn btn-success btn-sm" role="button">Lihat</a></td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Harapan bagi Umat Manusia</td>
							<td>23 June 2017</td>
							<td><a href="#" class="btn btn-success btn-sm" role="button">Lihat</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection