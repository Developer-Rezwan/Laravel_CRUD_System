@extends('layout/app')
@section('title','Welcome To My Laravel Website')
@section('content')
		<br>
		<a href="/logout" class="btn btn-info float-right">Logout</a>
        <h2 class="text-center alert-success">Welcome To My Crud laravel Website</h2>
        <div class="container col-8">
        	<h1>You Are successfully loged in!</h1>
        	Username : {{ Auth::user()->name }} <br>
        	Email : {{ Auth::user()->email }}
        </div>
@stop