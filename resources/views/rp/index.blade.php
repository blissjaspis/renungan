@extends('layouts.app')

@section('content')
<section class="jumbotron deskripsi">
  <div class="container">
    <h1 class="jumbotron-heading">List Book</h1>
    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
  </div>
</section>

<div class="container">
    <div class="row justify-content-md-center">
    	<div class="col-md-10">
	    	<div class="row">
    		
		    	<div class="col-md-3 mb-5">
		    		<div class="card">
			    		<a href="#"><img src="{{ asset('me.jpg') }}" alt="" class="aturgambar"></a>
		    			<div class="card-block">
			    			<h6 class="card-title">Sesuatu yang Lebih Baik</h6>
			    			<p class="text-muted"><small>By: Calvin B Rock</small></p>
		    			</div>
		    		</div>
		    	</div>		    	

		    	<div class="col-md-3 mb-5">
		    		<div class="card">
			    		<a href="#"><img src="{{ asset('me.jpg') }}" alt="" class="aturgambar"></a>
		    			<div class="card-block">
			    			<h6 class="card-title">Sesuatu yang Lebih Baik</h6>
			    			<p class="text-muted"><small>By: Calvin B Rock</small></p>
		    			</div>
		    		</div>
		    	</div>

	    	</div>
    	</div>
    </div>
</div>
@endsection