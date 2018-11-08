<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pro Web Development - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Styles -->
       <link rel="stylesheet" href="{{ asset('css/master.css') }}" />
		@yield('styles')

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		@yield('scripts')

    </head>
    <body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ url('/') }}">Pro Web Development</a>
				</div>
				<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					@if(!Request::is('/'))
						<li><a href="{{ url('/') }}">Home</a></li>
					@endif
					@yield('menu-items')
				</ul>
				</div>
			</div>
		</nav>
		@yield('body-content')
		@if(View::hasSection('content'))
		<div class="container">
			@yield('content')
		</div>
		@endif
		<div class="footer">
			<p>Copyright &copy; 2018 Pro Web Development. All rights reserved.</p>
			<p>View this code on <a href="https://github.com/DonkeyCore/eliblaney">GitHub!</a></p>
		</div>

		@yield('body-scripts')

    </body>
</html>
