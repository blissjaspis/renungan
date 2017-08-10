@extends('layouts.app')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('https://getmdl.io/templates/blog/images/road_big.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="post-heading">
                    <h1>Man must explore, and this is exploration at its greatest</h1>
                    {{-- <h2 class="subheading">Problems look mighty small from 150 miles up</h2> --}}
                    <br>
                    <span class="meta">Renungan August 24, 2017 in Series <a href="#">Sesuatu yang Lebih Baik</a></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">

    			<audio controls class="embed-responsive embed-responsive-16by9" preload="none">
					<source src="{{ asset('25-07-2017.mp3') }}" type="audio/mpeg">
				</audio>

                <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>


                <h2 class="section-heading">The Final Frontier</h2>

                <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

                <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>

                <h2 class="section-heading">Reaching for the Stars</h2>

                <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

                <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>

                <p>Placeholder text by <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
            </div>
        </div>
        <div class="row mb-5">
        	<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            	<hr class="my-4">
	    		<div class="row">
	    			<div class="offset-md-1">
			    		<img src="https://cdn-images-1.medium.com/fit/c/60/60/1*V5SrlTpwn6NfC7WEvYRb8g.jpeg" alt="..." class="rounded-circle">
	    			</div>
	    			<div class="ml-3">
		    			<h4 class="h5 text-capitalize">Bliss Jaspis</h4>
		    			<a href="#"><i class="fa fa-twitter"></i></a>
		    			<a href="#"><i class="fa fa-facebook"></i></a>
	    			</div>
	    		</div>
        	</div>
        </div>
    </div>
</article>
<hr>
@endsection