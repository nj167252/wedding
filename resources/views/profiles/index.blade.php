@extends('main')

@section('title', 'Profiles |')

@section('content')

<section class="container">
	<div class="row">

		<div class="col-md-10">
			<h3>Wedding Party Profiles</h3>
			
		</div>

		<div class="col-md-2">
			<a href="{{ route('profiles.create') }}" class="btn btn-primary btn-block btn-md" style="margin-top: 20px">Create Profile</a>
		</div>

	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Image</th>
					<th>Bio</th>
					<th></th>
				</thead>
				<tbody>

					@foreach($profiles as $profile)
					<tr>
						<th>{{ $prfile->id }}</th>
						<td>{{ $profile->name }}</td>
						<td>{{ $profile->image }}</td>
						<td>{{ $profile->bio }}</td>
						<td>
							<a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-primary btn-xs">View</a>
							<a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-default btn-xs">Edit</a>
						</td>
					</tr>
					@endforeach

				</tbody>
			</table>
		</div>
	</div>
</section>

@stop
