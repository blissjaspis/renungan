@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-10 mt-3 mb-3">
			<div class="card">
			<img src="https://getmdl.io/templates/blog/images/road_big.jpg" alt="" style="height: 280px;" class="img-responsive">

			<audio controls class="embed-responsive embed-responsive-16by9">
				<source src="{{ asset('25-07-2017.mp3') }}" type="audio/mpeg">
			</audio>

			<div class="card-block">
				<h1 class="h1">Lorem ipsum dolor sit amet.</h1>

				<ul class="list-inline">
				  <li class="list-inline-item text-muted"><em>Senin, Juli 24, 2017</em></li>
				  <li class="list-inline-item">Sesuatu yang Lebih Baik</li>
				</ul>

	    		<div class="row justify-content-md-center">
	    			<div class="col-md-11 mt-3">
		    			<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
		    			</p>
    					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat excepturi sunt beatae harum soluta, vel praesentium odio dignissimos reiciendis quasi optio quas sint ducimus molestiae obcaecati eaque natus eum odit, magnam facilis quia, et minus perferendis accusamus! Ipsa nihil minus sequi dignissimos modi reiciendis odio consequuntur distinctio soluta repellat accusantium non quis nulla quibusdam, quisquam facere animi. Repellendus dignissimos, voluptate minima? Inventore culpa optio quos voluptate porro maxime quam voluptas officia, debitis adipisci, aperiam quaerat eius, assumenda repudiandae blanditiis est delectus voluptatem architecto maiores. Soluta hic animi illum quas, praesentium. Quod possimus provident, vel, iusto explicabo tempore aliquam at debitis?</p>
	    			</div>
	    		</div>

	    		<hr class="my-4">
	    		<div class="offset-md-1">
		    		<div class="row justify-content-start">
		    			<div class="">
				    		<img src="https://cdn-images-1.medium.com/fit/c/60/60/1*V5SrlTpwn6NfC7WEvYRb8g.jpeg" alt="..." class="rounded-circle">
		    			</div>
		    			<div class="ml-3">
			    			<h4 class="h6">Bliss Jaspis</h4>
			    			<ul class="list-inline">
			    				<li><a href="https://twitter.com/Yaspisz">Twitter</a></li>
			    			</ul>
		    			</div>
		    		</div>

	    		</div>
		  	</div>
		</div>
		</div>
	</div>
</div>
@endsection