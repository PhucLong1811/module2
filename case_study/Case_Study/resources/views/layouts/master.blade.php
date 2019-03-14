<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('head.title')</title>
	<link rel="stylesheet" href="">
	@yield('head.css')
</head>
<body>
	@include('partial.header')
	<div class="container">
		@yield('body.content')
	</div>
	@include('partial.footer')
</body>
</html>