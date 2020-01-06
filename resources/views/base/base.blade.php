<html>
   <head>
      	<title>@yield('title')</title>
      	<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
   </head>
   <body>
   		<header>
   			@include('base.header')
   		</header>
   		<div id="main-content">
      		@yield('content')
      	</div>
      	<footer>
      		@include('base.footer')
      	</footer>
   </body>
</html>