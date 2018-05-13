@extends('main')

@section('title', 'Show Profile |')

@section('content')

<section class="container">
	<div class="row">

		<div class="col-md-8">
			<div class="profile">
				{{ $profile->image }}
			</div>
			<p class="lead text-center" style="margin-top:20px">{{ $profile->name }}</p>
			<p class="text-content text-center">{{ $profile->bio }}</p>
		</div>

		<div class="col-md-4">
			<div class="well" style="margin-top: 20px">
				<p><strong>Created at : </strong>{{ date('M j, Y H:i', strtotime($profile->created_at)) }}</p>
				<p><strong>Updated at : </strong>{{ date('M j, Y H:i', strtotime($profile->updated_at)) }}</p>
				<hr>
				<div class="row">
					<div class="col-xs-6">
						<a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary btn-block">Edit</a>
					</div>
					<div class="col-xs-6">

						<form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">

							{{ method_field('DELETE') }}
						  {{ csrf_field() }}

						<input type="submit" class="btn btn-danger btn-block" value="Delete">

					</form>

					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<a href="{{ route('profiles.index') }}" class="btn btn-default btn-block" style="margin-top: 10px">List</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

@stop
