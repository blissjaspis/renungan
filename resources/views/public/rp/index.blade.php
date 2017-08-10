@extends('layouts.app')

@section('content')
<section class="jumbotron header-section">
  <div class="container header-section__margin">
    <h1 class="jumbotron-heading">List Book</h1>
    <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
  </div>
</section>

<div class="container">
    <div class="row justify-content-md-center">
    	<div class="col-md-10">
	    	<div class="row">
		    	<div class="col-lg-4 col-sm-6 mb-5">
	                <div class="card h-100">
	                    <a href="#"><img class="card-img-top img-fluid" src="{{ asset('me.jpg') }}" alt=""></a>
	                    <div class="card-block">
	                        <h6 class="card-title"><a href="#">Sesuatu yang Lebih Baik</a> <small><em>(2017)</em></small></h6>
	                        <p class="card-text">- Calvin B Rock</p>
	                    </div>
	                </div>
	            </div>

	            <div class="col-lg-4 col-sm-6 mb-5">
	                <div class="card h-100">
	                    <a href="#"><img class="card-img-top img-fluid" src="{{ asset('me.jpg') }}" alt=""></a>
	                    <div class="card-block">
	                        <h6 class="card-title"><a href="#">Sesuatu yang Lebih Baik</a> <small><em>(2017)</em></small></h6>
	                        <p class="card-text text-muted">-  Calvin B Rock</p>
	                    </div>
	                </div>
	            </div>

	    	</div>
    	</div>
    </div>
</div>
<hr>
@endsection