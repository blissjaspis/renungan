@extends('layouts.app')

@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{ asset('home.jpg') }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="site-heading">
                    <h1>Welcome!</h1>
                    <hr class="small">
                    <span class="subheading">Blog pribadi yang ingin memberikan sesuatu!</span>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection