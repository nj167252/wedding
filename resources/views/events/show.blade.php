@extends('main')

@section('title', 'Show Event |')

@section('content')

<section class="container">
	<div class="row">

		<div class="col-md-8 d-flex flex-column align-items-center">
			<div class="event-show">
				<div class="event-title">
					<h3>{{ $event->title }}</h3>
				</div>
				<div class="event-body">
					<label>{{ $event->date }}</label>
					<p>{{ $event->body }}</p>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="well" style="margin-top: 20px">
				<p><strong>Created at : </strong>{{ date('M j, Y H:i', strtotime($event->created_at)) }}</p>
				<p><strong>Updated at : </strong>{{ date('M j, Y H:i', strtotime($event->updated_at)) }}</p>
				<hr>
				<div class="row">
					<div class="col-xs-6">
						<a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary btn-block">Edit</a>
					</div>
					<div class="col-xs-6">
						<a href="{{ route('events.destroy', $event->id) }}" class="btn btn-danger btn-block">Delete</a>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<a href="{{ route('events.index') }}" class="btn btn-default btn-block" style="margin-top: 10px">List</a>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

@stop
