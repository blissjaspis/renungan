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
				  	<a href="{{ route('admin.renungan-pagi.index') }}" class="list-group-item list-group-item-action"><i aria="true" class="fa fa-heart"> Renungan</i></a>
				  	<a href="{{ url('/user/series') }}" class="list-group-item active"><i aria="true" class="fa fa-bars"> Series</i></a>
				  	<a href="{{ route('admin.blog.index') }}" class="list-group-item list-group-item-action"><i aria="true" class="fa fa-newspaper-o"> Blog</i></a>
				  	<a href="#" class="list-group-item list-group-item-action"><i aria="true" class="fa fa-user-circle-o"> Export Data</i></a>
				</div>
			</div> <!-- End Col-lg3 -->
			<div class="col-lg-9">

				<div class="card">

					<div class="card-header">
						List Series
						<a href="{{ route('admin.series.create') }}" class="card-link btn btn-success btn-sm float-right">Add Series</a>
					</div>

					<div class="card-block">
						<table class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>Cover</th>
									<th>Judul</th>
									<th>Tahun</th>
									<th>Author</th>
								</tr>
							</thead>
							<tbody>
							@forelse($series as $key => $serie)
								<tr>
									<th scope="row">{{ $key+1 }}</th>
									<td><img src="{{ asset('storage/workship/series/'.$serie->book_cover) }}" alt="" class="thumbnail" style="height: 5rem;"></td>
									<td><a href="#">{{ $serie->title }}</a></td>
									<td>{{ $serie->year }}</td>
									<td>{{ $serie->author }}</td>
								</tr>
							@empty
								<tr>
									<td colspan="5" class="text-center">Belum Ada Data!</td>
								</tr>
							@endforelse
							</tbody>
						</table>
					</div> <!-- End Card Block-->
				</div> <!-- End Card-->
			</div> <!-- End Col-lg-9 -->
		</div> <!-- End Row -->
	</div> <!-- End Col-lg-12 -->
</div>
<hr>
@endsection