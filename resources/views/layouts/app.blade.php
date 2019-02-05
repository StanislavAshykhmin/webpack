<!DOCTYPE html>
<html class="qwerty" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 4 Admin Template">
	<meta name="author" content="Bootlab">
	<title>@yield('title')</title>
	@stack('styles')
</head>
<body>
@include('layouts.header')
@include('content.widget.clock')
@yield('content')
@include('content.widget.photo')
@include('layouts.footer')
@stack('scripts')
</body>
</html>