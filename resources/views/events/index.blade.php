@extends('main')

@section('title', 'Events |')

@section('content')

<section class="container">
	<div class="row">

		<div class="col-md-10">
			<h3>Wedding Events</h3>
			
		</div>

		<div class="col-md-2">
			<a href="{{ route('events.create') }}" class="btn btn-primary btn-block btn-md" style="margin-top: 20px">Create Event</a>
		</div>

	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Date</th>
					<th>Body</th>
					<th></th>
				</thead>
				<tbody>
					@foreach($events as $event)
					<tr>
						<th>{{ $event->id }}</th>
						<td>{{ $event->title }}</td>
						<td>{{ date('M j, Y', strtotime($event->date)) }}</td>
						<td>{{ substr($event->body, 0, 50) }}{{ strlen($event->body) > 50 ? " ..." : "" }}</td>
						<td>
							<a href="{{ route('events.show', $event->id) }}" class="btn btn-primary btn-xs">View</a>
							<a href="{{ route('events.edit', $event->id) }}" class="btn btn-default btn-xs">Edit</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>

@stop
