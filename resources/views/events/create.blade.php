@extends('main')

@section('title', 'Create Event |')

@section('content')

<section class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Create New Event</h1>
			<p class="text-content">Use the form below to create a new event. All events will be displayed to everyone on the home page.</p>
			<form action="{{ url('events') }}" method="POST" class="d-flex flex-column align-items-center">

				{{ csrf_field() }}

				<div class="form-group flex-md-8">
					<label for="title">Title:</label>
					<input type="text" id="title" name="title" class="form-control" placeholder="Pool Party" required />
				</div>
				<div class="form-group flex-md-8">
					<label for="date">Date:</label>
					<input type="date" id="date" name="date" class="form-control" placeholder="" required />
				</div>
				<div class="form-group flex-md-8">
					<label for="body">Body:</label>
					<textarea type="text" id="body" name="body" class="form-control" rows="5" placeholder="What is the event about..."></textarea>
				</div>
				<div class="form-group flex-md-8">
					<button type="submit" class="btn btn-lg btn-block btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit Event</button>
				</div>
			</form>
		</div>
	</div>
</section>

@stop
