@extends('layouts.app')

@section('content')

<section class="header-section p-2">
	<div class="header-section__margin"></div>
</section>

<div class="container mt-5">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<form action="{{ route('admin.series.store') }}" method="post" enctype="multipart/form-data" role="form">

				{{ csrf_field() }}
			
				<h3 class="h3 text-center mb-4 text-muted">Add new Series</h3>

				<div class="form-group">
					<label for="title" class="form-control-label">Title</label>
					<input type="text" class="form-control" placeholder="e.g. Kemenangan" name="title">
				</div>

				<div class="form-group">
					<label for="title" class="form-control-label">Author</label>
					<input type="text" class="form-control" placeholder="e.g. Calvin B Rock" name="author">
				</div>

				<div class="form-group">
					<label for="year" class="form-control-label">Year</label>
					<input type="number" class="form-control" placeholder="e.g. 2017" name="year">
				</div>

				<div class="form-group">
					<label for="title" class="form-control-label">Book Cover</label>
					<input type="file" class="form-control" name="book_cover">
				</div>

				<hr>

				<button type="Submit" class="btn btn-success btn-md">Submit</button>
				<a href="{{ route('admin.series.index') }}" class="btn btn-secondary btn-md">Cancel</a>
			</form>
		</div>
	</div>
</div>
<hr class="my-5">
@endsection