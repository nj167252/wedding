<!DOCTYPE html>
<html lang="en">
 
	<head>
		@include('partials._head')
	</head>

  <body>

  	@include('partials._nav')

  	@include('partials._messages')

		@yield('content')

		@include('partials._footer')

		@include('partials._js')

		@yield('scripts')

  </body>
</html>
