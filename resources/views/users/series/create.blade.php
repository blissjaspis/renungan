@extends('layouts.app')

@section('content')

	<div class="container mt-5">
		<div class="row justify-content-md-center">
			<div class="col-md-6">
				<form action="#" method="post" enctype="">
				
					<h3 class="h3 text-center mb-4 text-muted">Add new Series</h3>

					<div class="form-group">
						<label for="title" class="form-control-label">Title</label>
						<input type="text" class="form-control" placeholder="" name="title">
					</div>

					<div class="form-group">
						<label for="title" class="form-control-label">Author</label>
						<input type="text" class="form-control" placeholder="" name="author">
					</div>

					<div class="form-group">
						<label for="title" class="form-control-label">Date</label>
						<input type="date" class="form-control" placeholder="" name="date">
					</div>

					<div class="form-group">
						<label for="title" class="form-control-label">Book Cover</label>
						<input type="file" class="form-control" name="book_cover">
					</div>

					<hr>

					<a href="#" class="btn btn-success btn-md">Submit</a>
					<a href="{{ route('series.index') }}" class="btn btn-secondary btn-md">Cancel</a>
				</form>
			</div>
		</div>
	</div>

@endsection