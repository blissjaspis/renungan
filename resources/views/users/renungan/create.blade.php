@extends('layouts.app')

@section('content')

	<div class="container mt-5">
		<div class="row justify-content-md-center">
			<div class="col-md-6">
				<form action="{{ route('renungan-pagi.store') }}" method="post" enctype="multipart/form-data">
				
					{{ csrf_field() }}

					<h3 class="h3 text-center mb-4 text-muted">Add new Morning Workship</h3>

					<div class="form-group">
						<label for="title" class="form-control-label">Title</label>
						<input type="text" class="form-control" placeholder="" name="title">
					</div>

					<div class="form-group">
						<label for="serie" class="form-control-label">Serie</label>
						<select name="serie" class="form-control" id="serie">
							<option value="">Choose..</option>
						</select>
					</div>

					<div class="form-group">
						<label for="audio" class="form-control-label">Audio</label>
						<input type="file" class="form-control" placeholder="" name="audio">
					</div>

					<div class="form-group">
						<label for="thumbnail" class="form-control-label">Thumbnail</label>
						<input type="file" class="form-control" name="thumbnail">
					</div>

					<div class="form-group">
						<label for="content" class="form-control-label">Content</label>
						<textarea name="content" id="content" cols="4" rows="8" class="form-control"></textarea>
					</div>

					<hr>

					<button type="Submit" class="btn btn-success btn-md">Submit</button>
					<a href="#" class="btn btn-primary btn-md">Draft</a>
					<a href="{{ route('renungan-pagi.index') }}" class="btn btn-secondary btn-md">Cancel</a>
				</form>
			</div>
		</div>
	</div>

@endsection

@push('scripts')
  {{-- <script src="{{ asset('/vendor/tinymce/tinymce.min.js') }}"></script> --}}
  {{-- <script>tinymce.init({ selector:'textarea' });</script> --}}
	<link rel="stylesheet" href="{{ asset('/vendor/simplemde/simplemde.min.css') }}">
	<script src="{{ asset('/vendor/simplemde/simplemde.min.js') }}"></script>

	<script>
		var simplemde = new SimpleMDE();
	</script>
@endpush