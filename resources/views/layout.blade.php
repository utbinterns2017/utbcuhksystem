<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/png" href="http://www.favicon.cc/logo3d/512858.png">
	<title>My Project</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
@include('navbar')

{{-- <nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="\">UTB-CUHK</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="/">Home</a></li>
				<li><a href="/">Services</a></li>
				<li><a href="/">Promotion</a></li>
				<li><a href="/">About</a></li>
				<li><a href="/">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
      			<li {{{ (Request::is('registration') ? 'class=active' : '') }}}><a href="registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li {{{ (Request::is('login') ? 'class=active' : '') }}}><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
   			</ul>
		</div>
	</nav> --}}

@include('heading')

{{-- @include('carousel')
 --}}	
	
@yield('content')



	


</body>
</html>