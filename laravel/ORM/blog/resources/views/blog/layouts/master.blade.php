<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('head.title')</title>
	<link rel="stylesheet" href="/css/app.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	@yield('head.css')
</head>
<body>
	@include('blog.partial.header')
	@yield('body.content')
	@yield('footer.content')
	@include('blog.partial.footer')
</body>
</html>