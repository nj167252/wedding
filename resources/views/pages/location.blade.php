@extends('main')

@section('title', 'Wedding Party |')

@section('content')

<section class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Location</h1>
			<p>As you may have guessed the wedding is in Victoria Falls. The map below has a few buttons next to it. The buttons show you where the different locations are going to be. The most important place to be is at one of the pick-up locations at 2:15pm on the 4th of August.</p>
			<div class="map">
				<div id="map"></div>
			</div>
		</div>
	</div>
</section>

<section class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Activities</h1>
			<p>If you are interested in doing some activities please take a look at the activities list below and then use the contact form to coordinate with Louise. Here is a list of all activities that Louise can help organize on your behalf. Use the contact form below or on the contact page.</p>
			<p>NOTE: All prices below are in US Dollars and are per person rates.</p>
			<div class="activities">
				<div class="d-flex justify-content-between">
					<span>White Water Rafting</span>
					<span>120</span>
				</div>
				<div class="d-flex justify-content-between">
					<span>Upper Zambezi Canoeing</span>
 					<span>150</span>
 				</div>
				<div class="d-flex justify-content-between">
					<span>Gorge Swing</span>
 					<span>95</span>
 				</div>
				<div class="d-flex justify-content-between">
					<span>Zip Line</span>
 					<span>69</span>
 				</div>
				<div class="d-flex justify-content-between">
					<span>Flying Fox</span>
 					<span>42</span>
 				</div>
 				<div class="d-flex justify-content-between">
 					<span>Canopy Tour</span>
 					<span>53</span>
 				</div>
 				<div class="d-flex justify-content-between">
 					<span>Chobe Trip (full day)</span>
 					<span>160</span>
 				</div>
 				<div class="d-flex justify-content-between">
 					<span>Sundowner Cruise</span>
 					<span>40</span>
 				</div>
 				<div class="d-flex justify-content-between">
 					<span>Sundowner Cruise (luxury)</span>
 					<span>70</span>
 				</div>
 				<div class="d-flex justify-content-between">
 					<span>Elephant Encounter</span>
 					<span>75</span>
 				</div>
 				<div class="d-flex justify-content-between">
 					<span>Helicopter (13min)</span>
 					<span>150</span>
 				</div>
 				<div class="d-flex justify-content-between">
 					<span>Helicopter (15 min)</span>
 					<span>179</span>
 				</div>
 				<div class="d-flex justify-content-between">
 					<span>Game Drive</span>
 					<span>100</span>
 				</div>
 				<div class="d-flex justify-content-between">
 					<span>Croc Cage Diving</span>
 					<span>70</span>
 				</div>
 				<div class="d-flex justify-content-between">
 					<span>Fishing (3 hours)</span>
 					<span>100</span>
 				</div>
				</ul>
			</div>
		</div>
	</div>
</section>

@stop

@section('scripts')
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpUUSWloS2znEF9-vxePF5vqNE-p2fCFE&callback=googleMap"></script>
@stop
