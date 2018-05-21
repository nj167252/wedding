@extends('main')

@section('title', 'Wedding Party |')

@section('content')
  <section class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>The Bridesmaids</h1>
      </div>
      <div class="col-md-12 d-flex">
        <div class="flex-sm-fill invite" style="background-color: #808080;">
          <img class="" src="{{ asset('pictures/bridesmaid-logo.svg') }}" />
        </div>
        <div class="flex-lg-fill">
          
          <?php $bridesmaidCount = 0 ?>

          @foreach($profiles as $profile)
          @if ($profile->party == "Bridesmaid")
          <?php $bridesmaidCount++ ?>
          <div class="bridesmaid profile{{ $profile->id }} d-flex flex-column justify-align {{ $bridesmaidCount > 1 ? 'bridesmaid-hide' : '' }}">
            <img class="profile" src="{{ asset('images/' . $profile->image) }}" />
            <p class="lead text-center" style="display: margin-top:20px">{{ $profile->name }}</p>
            <p class="text-content text-center">{{ $profile->bio }}</p>
          </div>
          @endif
          @endforeach

          <div class="d-flex justify-content-between bridesmaid-party">
            
            @foreach($profiles as $profile)
            @if($profile->party == "Bridesmaid")
            <a id="profile{{ $profile->id }}" class="btn btn-md btn-default">{{ $profile->name }}</a>
            @endif
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>The Men of the Groom</h1>
      </div>
      <div class="col-md-12 d-flex">
        <div class="flex-sm-fill invite" style="background-color: #808080;">Groomsman card picture</div>
        <div class="flex-lg-fill">
          
          <?php $groomsmanCount = 0 ?>

          @foreach($profiles as $profile)
          @if ($profile->party == "Groomsman")
          <?php $groomsmanCount++ ?>
          <div class="groomsman profile{{ $profile->id }} d-flex flex-column justify-align {{ $groomsmanCount > 1 ? 'groomsman-hide' : '' }}">
            <img class="profile" src="{{ asset('images/' . $profile->image) }}" />
            <p class="lead text-center" style="display: margin-top:20px">{{ $profile->name }}</p>
            <p class="text-content text-center">{{ $profile->bio }}</p>
          </div>
          @endif
          @endforeach

          <div class="d-flex justify-content-between groomsman-party">
            
            @foreach($profiles as $profile)
            @if($profile->party == "Groomsman")
            <a id="profile{{ $profile->id }}" class="btn btn-md btn-default">{{ $profile->name }}</a>
            @endif
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </section>

  <script type="text/javascript">
    
    $('.bridesmaid-party').click(function(event){

        var target = $(event.target);

        var buttonId = String(target.attr("id"));

        $('.bridesmaid').addClass("bridesmaid-hide");

        $('.' + buttonId).removeClass("bridesmaid-hide");

      });

    $('.groomsman-party').click(function(event){

        var target = $(event.target);

        var buttonId = String(target.attr("id"));

        $('.groomsman').addClass("groomsman-hide");

        $('.' + buttonId).removeClass("groomsman-hide");

      });

  </script>

@stop