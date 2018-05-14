@extends('main')

@section('title', 'Create Profile |')

@section('content')

<section class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Create Profile</h1>
			<p class="text-content">Use the form below to create a new profile for the wedding party. All profiles will be displayed to everyone on the Wedding Party page.</p>
			<form action="{{ url('profiles') }}" method="POST" class="d-flex flex-column align-items-center" enctype="multipart/form-data">

				{{ csrf_field() }}

				<div class="form-group flex-md-8">
					<label for="name">Name:</label>
					<input type="text" id="name" name="name" class="form-control" placeholder="Derek Jimes" required />
				</div>
				<div class="form-group flex-md-8">
					<label for="image">Profile Picture:</label>
					<input type="file" id="image" name="image" class="" placeholder="" required />
					<p class="help-block">Upload a profile picture. Make sure it is 500px by 500px.</p>
				</div>
				<div class="form-group flex-md-8">
					<label for="bio">Bio:</label>
					<textarea type="text" id="bio" name="bio" class="form-control" rows="5" placeholder="Give me a worthy description.."></textarea>
				</div>
				<div class="form-group flex-md-8">
					<button type="submit" class="btn btn-lg btn-block btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit Profile</button>
				</div>
			</form>
		</div>
	</div>
</section>

@stop
