@extends('layouts.app')

@section('content')
<section class="header-section p-2">
	<div class="header-section__margin"></div>
</section>

<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-3">
			<div class="card">
				<img src="{{ asset('me.jpg') }}" class="card-img img-fluid" alt="" {{-- style="height: 250px; width: 250px;" --}}>
			</div>
		</div>

		<div class="col-md-9">
			<h1 class="h2">Sesuatu yang Lebih Baik</h1>
			<p class="text-muted"><em>Year series 2017 by Calvin B Rocks</em></p>

			<div>
				<ul class="list-inline">
					<li class="list-inline-item"><h5 class="h5">Recent Episodes</h5></li>
					<li class="list-inline-item pl-3"><a href="#" class=""><small>View All</small></a></li>
				</ul>
			</div>

			<table class="table">
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Kekuasaan Dipulihkan</td>
						<td>25 June 2017</td>
						<td><a href="#" class="btn btn-success btn-sm rounded" role="button">Lihat</a></td>
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
<hr>
@endsection