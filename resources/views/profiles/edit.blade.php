@extends('main')

@section('title', 'Edit Profile |')

@section('content')

<section class="container">
	<div class="row">

		<div class="col-md-8">
			<h1>Edit Profile</h1>
			<p class="text-content">Use the form below to edit a profile. Remember all profiles will be displayed to everyone on the Wedding Party page.</p>
			<form action="{{ url('profiles', $profile->id) }}" method="POST">

				{{ method_field('PUT') }}
				{{ csrf_field() }}

				<div class="form-group">
					<label for="profile">Name:</label>
					<input type="text" id="profile" name="profile" class="form-control" placeholder="Pool Party" value="{{ $profile->profile }}" required />
				</div>
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="text" id="image" name="image" class="form-control" placeholder="" value="{{ $profile->image }}" required />
				</div>
				<div class="form-group">
					<label for="bio">Bio:</label>
					<textarea type="text" id="bio" name="bio" class="form-control" rows="5" placeholder="What is the event about...">{{ $profile->bio }}</textarea>
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
