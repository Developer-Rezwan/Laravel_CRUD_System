@extends('layout/app')

@section('title','Login to view Your account')

@section('content')<br><br>
<div class="container col-sm-6">
	<form action="login" method="post" class="form-control">
		@csrf
		<h1 class="text-center text-success">Login Your Account</h1>
		<input type="text" class="form-control" placeholder="Username" name="name" value="{{ old('name') }}">
		@error('name')
		 <div class="text-danger">{{ $message }}</div>
		@enderror
		<br>

		<input type="password" class="form-control" placeholder="Password" name="password" value="{{ old('password') }}">
		@error('password')
		 <div class="text-danger">{{ $message }}</div>
		@enderror
		<br>

		<input type="submit" class="form-control alert-info" value="Login" name="login">
	</form>
</div>
@stop