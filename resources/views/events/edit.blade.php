@extends('main')

@section('title', 'Edit Event |')

@section('content')

<section class="container">
	<div class="row">

		<div class="col-md-8">
			<h1>Edit Event</h1>
			<p class="text-content">Use the form below to edit an event. Remember all events will be displayed to everyone on the home page.</p>
			<form action="{{ url('events', $event->id) }}" method="POST">

				{{ method_field('PUT') }}
				{{ csrf_field() }}

				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" id="title" name="title" class="form-control" placeholder="Pool Party" value="{{ $event->title }}" required />
				</div>
				<div class="form-group">
					<label for="date">Date:</label>
					<input type="date" id="date" name="date" class="form-control" placeholder="" value="{{ $event->date }}" required />
				</div>
				<div class="form-group">
					<label for="body">Body:</label>
					<textarea type="text" id="body" name="body" class="form-control" rows="5" placeholder="What is the event about...">{{ $event->body }}</textarea>
				</div>
			</div>

			<div class="col-md-4">
				<div class="well" style="margin-top: 20px">
					<p><strong>Created at : </strong>{{ date('M j, Y H:i', strtotime($event->created_at)) }}</p>
					<p><strong>Updated at : </strong>{{ date('M j, Y H:i', strtotime($event->updated_at)) }}</p>
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
