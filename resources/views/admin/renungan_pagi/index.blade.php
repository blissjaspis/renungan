@extends('layouts.app')

@section('content')
<section class="header-section p-2">
	<div class="header-section__margin"></div>
</section>

<div class="container mt-4">

	<div class="col-lg-12">

		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Library</a></li>
			<li class="breadcrumb-item active">Data</li>
		</ol>

		<div class="row">
			<div class="col-lg-3">
				<div class="list-group">
				  	<a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
				    	<i aria="true" class="fa fa-home"> Dashboard</i>
				  	</a>
				  	<a href="{{ route('admin.renungan-pagi.index') }}" class="list-group-item active"><i aria="true" class="fa fa-heart"> Renungan</i></a>
				  	<a href="{{ route('admin.series.index') }}" class="list-group-item list-group-item-action"><i aria="true" class="fa fa-bars"> Series</i></a>
				  	<a href="{{ route('admin.blog.index') }}" class="list-group-item list-group-item-action"><i aria="true" class="fa fa-newspaper-o"> Blog</i></a>
				  	<a href="#" class="list-group-item list-group-item-action"><i aria="true" class="fa fa-user-circle-o"> Export Data</i></a>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="card">

					<div class="card-header">
						Lists Morning Workship
						<a href="{{ route('admin.renungan-pagi.create') }}" class="card-link btn btn-success btn-sm float-right">Add Workship</a>
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
				</div> <!-- End Card -->

			</div> <!-- End Col-lg-9 -->
		</div> <!-- End Row -->
	</div>
</div>
<hr>
@endsection