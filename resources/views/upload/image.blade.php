@extends('layout.app')
@section('title','Upload images')
@section('content')
  <form class="form-control" action="upload_image" method="Post" enctype="multipart/form-data">
  	@csrf
  	<div>
  		<input type="file" name="image">
  		<input type="submit" value="Upload">
  	</div>
  </form>
@stop