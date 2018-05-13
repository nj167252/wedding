	<nav class="navbar navbar-default">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/">#Justmarriedjames</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	        <li class="{{ Request::is('party') ? "active" : "" }}"><a href="/party">Wedding Party</a></li>
	        <li class="{{ Request::is('gallery') ? "active" : "" }}"><a href="/gallery">Gallery</a></li>
	        <li class="{{ Request::is('location') ? "active" : "" }}"><a href="/location">Location</a></li>
	        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>

	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="{{ route('events.index') }}">Manage Events</a></li>
	            <li><a href="{{ route('profiles.index') }}">Manage Profiles</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="{{ route('events.index') }}">Login</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="{{ route('events.index') }}">Register</a></li>
	          </ul>
	        </li>

	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>