@extends('main')

@section('title', 'Wedding Party |')

@section('content')

<section class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Contact Us</h1>
			<p class="text-content">You can contact Louise or the Bride and Groom using the form below.</p>
			<form class="d-flex flex-column align-items-center">
				<div class="form-group flex-md-8">
					<label for="name">Full Name:</label>
					<input type="text" id="name" name="name" class="form-control" placeholder="Hank Frankle" required />
				</div>
				<div class="form-group flex-md-8">
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" class="form-control" placeholder="hank@thewedding.com" required />
				</div>
				<div class="form-group flex-md-8">
					<label for="contact">Contact:</label>
					<input type="email" id="email" name="contact" class="form-control" placeholder="Louise / Nick / Char" required />
				</div>
				<div class="form-group flex-md-8">
					<label for="message">Message:</label>
					<textarea type="text" id="message" name="message" class="form-control" rows="5" placeholder="Write your message here..."></textarea>
				</div>
				<div class="form-group flex-md-8">
					<button type="submit" class="btn btn-lg btn-block btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
				</div>
			</form>
		</div>
	</div>
</section>

@stop
