<style>
.navbar{
	margin-bottom: 0 !important;
}
</style>
</style>
<div class="navbar">
	<nav class="navbar navbar-default navbar-fixed-top">
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
				<li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<li><a href="registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			{{-- <li {{{ (Request::is('registration') ? 'class=active' : '') }}}><a href="registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      			<li {{{ (Request::is('login') ? 'class=active' : '') }}}><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> --}}
   			</ul>
		</div>
	</nav>
</div>