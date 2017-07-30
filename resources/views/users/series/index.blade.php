@extends('layouts.app')

@section('content')
	<div class="container mt-5">
		<div class="row justify-content-md-center">
			<div class="col-md-10">
				<div class="card">

					<div class="card-header">
						List Series
						<a href="{{ route('series.create') }}" class="card-link btn btn-success btn-sm float-right">Add Series</a>
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
								{{-- <tr>
									<th scope="row">1</th>
									<td><img src="{{ asset('me.jpg') }}" alt="" class="thumbnail" style="height: 5rem;"></td>
									<td><a href="#">Kekuasaan Dipulihkan</a></td>
									<td>2017</td>
									<td>Calvin B Rock</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td><img src="{{ asset('me.jpg') }}" alt="" class="thumbnail" style="height: 5rem;"></td>
									<td><a href="#">Keadaan Buruk Adam Kedua</a></td>
									<td>2017</td>
									<td>Calvin B Rock</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td><img src="{{ asset('me.jpg') }}" alt="" class="thumbnail" style="height: 5rem;"></td>
									<td><a href="">Harapan bagi Umat Manusia</a></td>
									<td>2017</td>
									<td>Calvin B Rock</td>
								</tr> --}}
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection