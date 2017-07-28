@extends('layouts.app')

@section('content')
	<div class="container mt-5">
		<div class="row justify-content-md-center">
			<div class="col-md-10">
				<div class="card">

					<div class="card-header">
						Lists Morning Workship
						<a href="{{ route('renungan-pagi.create') }}" class="card-link btn btn-success btn-sm float-right">Add Workship</a>
					</div>

					<div class="card-block">

						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Judul</th>
									<th>Tanggal</th>
									<th>Status</th>
									<th>Posted</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td><a href="#">Kekuasaan Dipulihkan</a></td>
									<td>25 June 2017</td>
									<td><span class="badge badge-success">Published</span></td>
									<td>Bliss Jaspis</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td><a href="#">Keadaan Buruk Adam Kedua</a></td>
									<td>24 June 2017</td>
									<td><span class="badge badge-primary">Draft</span></td>
									<td>Bliss Jaspis</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td><a href="">Harapan bagi Umat Manusia</a></td>
									<td>23 June 2017</td>
									<td><span class="badge badge-danger">Private</span></td>
									<td>Bliss Jaspis</td>
								</tr>
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection