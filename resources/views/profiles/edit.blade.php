@extends('main')

@section('title', 'Edit Profile |')

@section('content')

<section class="container">
	<div class="row">

		<div class="col-md-8">
			<h1>Edit Profile</h1>
			<p class="text-content">Use the form below to edit a profile. Remember all profiles will be displayed to everyone on the Wedding Party page.</p>
			<form action="{{ url('profiles', $profile->id) }}" method="POST" enctype="multipart/form-data">

				{{ method_field('PUT') }}
				{{ csrf_field() }}

				<div class="d-flex flex-column align-items-center">
					<img class="profile" src="{{ asset('images/' . $profile->image) }}" />
				</div>

				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" id="name" name="name" class="form-control" placeholder="Derik Jimes" value="{{ $profile->name }}" required />
				</div>
				<div class="form-group flex-md-8">
					<label for="image">Profile Picture:</label>
					<input type="file" id="image" name="image" class="" />
					<p class="help-block">Upload a profile picture. Make sure it is 500px by 500px.</p>
				</div>
				<div class="form-group">
					<label for="bio">Bio:</label>
					<textarea type="text" id="bio" name="bio" class="form-control" rows="5" placeholder="Give me a worthy description..">{{ $profile->bio }}</textarea>
				</div>
			</div>

			<div class="col-md-4">
				<div class="well" style="margin-top: 20px">
					<p><strong>Created at : </strong>{{ date('M j, Y H:i', strtotime($profile->created_at)) }}</p>
					<p><strong>Updated at : </strong>{{ date('M j, Y H:i', strtotime($profile->updated_at)) }}</p>
					<hr>
					<div class="row">
						<div class="col-xs-6">
							<a href="{{ url()->previous() }}" class="btn btn-default btn-block">Back</a>
						</div>
						<div class="col-xs-6">
							<input type="submit" class="btn btn-primary btn-block" value="Save">
						</div>
					</div>
				</div>
			</div>

		</form>
	</div>
</section>

@stop
