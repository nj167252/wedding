<div class="container">
  <div class="row">
    <div class="col-md-12">

      @if (Session::has('success'))

        <div class="alert alert-message alert-success alert-dismissible" role="alert">
          <strong>Success:</strong> {{ Session::get('success') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

      @endif

      @if (count($errors))

        <div class="alert alert-message alert-danger alert-dismissible" role="alert">
          <strong>Error(s):</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>

      @endif

    </div>
  </div>
</div>