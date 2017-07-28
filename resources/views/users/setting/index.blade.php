@extends('layouts.app')

@section('content')

<div class="container mt-4">

	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Library</a></li>
		<li class="breadcrumb-item active">Data</li>
	</ol>

	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
			  	<a href="#" class="list-group-item active">
			    	<i aria="true" class="fa fa-home"> Dashboard</i>
			  	</a>
			  	<a href="#" class="list-group-item list-group-item-action"><i aria="true" class="fa fa-user-circle-o"> Renungan</i></a>
			  	<a href="{{ url('/user/series') }}" class="list-group-item list-group-item-action"><i aria="true" class="fa fa-user-circle-o"> Series</i></a>
			  	<a href="#" class="list-group-item list-group-item-action"><i aria="true" class="fa fa-user-circle-o"> Users</i></a>
			  	<a href="#" class="list-group-item list-group-item-action"><i aria="true" class="fa fa-user-circle-o"> Export Data</i></a>
			</div>
		</div>
		<div class="col-md-9">
			
		</div>
	</div>
</div>
@endsection