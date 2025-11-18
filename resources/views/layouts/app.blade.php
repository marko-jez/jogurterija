<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', 'Frozen Yogurt Shop')</title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/mobile.css')}}">
</head>
<body>

  @include('partials.nav')

  @yield('content')

  	<script src="{{asset('js/mobile.js')}}" type="text/javascript"></script>

  @include('partials.footer')

</body>
</html>