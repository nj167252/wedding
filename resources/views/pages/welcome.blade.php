@extends('main')

@section('content')

  <section class="cover landing">
    <div class="container-fluid">

      <div class="container">
        <div class="row">
          <header class="col-md-12 d-flex flex-column landing-text align-items-center">
            <h1>Char &amp; Nick</h1>
            <p class="lead">Wedding Date</p>
            <h3>4th August 2018</h3>
          </header>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-md-12">
          <h1>The Bride &amp; Groom</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div style="background-color: #808080; height: 300px">Image of couple</div>
      </div>
      <div class="col-md-6">
        <p>We both agree that the first time we noticed each other was at the St. John's College pool. Char was there with her friend checking out the guys and Nick was there playing waterpolo...</p>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Timeline</h1>
        <p>We have been together for over a decade. Here is a timeline of pictures over the years...</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="d-flex flex-column">
          <div class="photo-display" style="background-color: #808080">Image</div>
          <div class="d-flex scroll">
            <div class="photo-timeline">1</div>
            <div class="photo-timeline">2</div>
            <div class="photo-timeline">3</div>
            <div class="photo-timeline">4</div>
            <div class="photo-timeline">5</div>
            <div class="photo-timeline">6</div>
            <div class="photo-timeline">7</div>
            <div class="photo-timeline">8</div>
            <div class="photo-timeline">9</div>
            <div class="photo-timeline">10</div>
            <div class="photo-timeline">11</div>
            <div class="photo-timeline">12</div>
            <div class="photo-timeline">13</div>
            <div class="photo-timeline">14</div>
            <div class="photo-timeline">15</div>
            <div class="photo-timeline">16</div>
            <div class="photo-timeline">17</div>
            <div class="photo-timeline">18</div>
            <div class="photo-timeline">19</div>
            <div class="photo-timeline">20</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Wedding Itinerary</h1>
        <p>Because the wedding is in Victoria Falls we have a few thing lined up before the wedding day. Then on the day we only have one request and that is you are on time to the pickup locations around the town...</p>
        <div class="itinerary">
          <div class="itinerary-line"></div>
          <div class="itinerary-event-container">

            @foreach($events as $event)
            <div class="itinerary-event">
              <div class="event">
                <div class="event-title">
                  <h3>{{ $event->title }}</h3>
                </div>
                <div class="event-body">
                  <label>{{ date('M j, Y H:i', strtotime($event->date)) }}</label>
                  <p>{{ $event->body }}</p>
                </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@stop
