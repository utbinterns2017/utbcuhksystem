@extends('layout')
<link rel="stylesheet" href="/css/style.css">
@section('navbar')

@section('content')
	<form method="POST" action="submitLogin" class="form-horizontal col-md-6 col-md-offset-3">
	<h2 >Login</h2>
		<div class="form-group">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label class="control col-md-2" for="username">Username:</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="username" placeholder="Enter username" name='username'>
			</div>
		</div>
		<div class="form-group">
			<label class="control col-md-2" for="password">Password:</label>
			<div class="col-md-10">
				<input type="password" class="form-control" id="password" placeholder="Enter password" name='password'>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<div class="checkbox">
					<label><input type="checkbox" name="remMe">Remember me</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-md-offset-2 col-md-10">
				<button type="submit" class="btn btn-default">Login</button>
			</div>
		</div>		
	</form>

	
@stop
