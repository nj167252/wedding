@extends('main')

@section('title', 'Wedding Party |')

@section('content')

<section class="container">
	<div class="row">
		<div class="col-md-12 d-flex justify-content-between align-items-center">
    	<h1>Gallery</h1>
			<div class="dropdown">
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			    Settings
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
			    <li><a href="manage_gallery.html">Manage Photos</a></li>
			    <li><a href="login.html">Login</a></li>
			  </ul>
			</div>
		</div>
  </div>
  <div class="row">
		<div class="col-md-12">
			<p>If you take some pictures in Victoria Falls and you want to have them please feel free to upload them here. To upload photos you will need to login. If you have not registered then you will see a link to register on the login page. Registration can take up to 24 hours because you will have to approved by the system admin.</p>
			<div class="d-flex flex-wrap">
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
				<div class="flex-fill img"></div>
			</div>
		</div>
	</div>
</section>

@stop
