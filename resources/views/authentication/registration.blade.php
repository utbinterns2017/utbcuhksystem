@extends('layout')
<link rel="stylesheet" href="/css/style.css">

@section('navbar')
@section('content')
	<form class="form-horizontal col-md-6 col-md-offset-3" action="submitReg" method="POST" name="regForm" autocomplete="off">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<h2>Registration</h2>
		<div class="form-group">
			<label class="control col-md-2" for="username">Username:</label>
			<div class="col-md-10">
				<input name="username" type="text" class="form-control" id="username" placeholder="Enter username">
			</div>
		</div>

		<div class="form-group">
			<label class="control col-md-2" for="email">Email:</label>
			<div class="col-md-10">
				<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
			</div>
		</div>

		<div class="form-group">
			<label class="control col-md-2" for="password">Password:</label>
			<div class="col-md-10">
				<input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
			</div>
		</div>


		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<button type="submit" class="btn btn-default">Register</button>
			</div>
		</div>

		<div class="col-md-12">
				@if(count($errors))
					@foreach($errors->all() as $error)
				    	<p style="text-align:center;color:red">{{ $error }}</p>
				    @endforeach
			@endif
		</div>

	</form>
@stop