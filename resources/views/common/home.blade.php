@extends('layout.main')
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
				{{-- @foreach($dataArr as $data)
					<li><a href="/"><span class="glyphicon glyphicon-user"></span> {{ $data->username}}</a></li>
				@endforeach --}}
				<li><a href="/"><span class="glyphicon glyphicon-user"></span> {!!$username!!}</a></li>
				<li><a href="logout">Logout</a></li>
   			</ul>
		</div>
	</nav>
</div>
@section('content')
	
@stop