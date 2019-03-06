@extends('layouts.master')
@section('head.title')
Khởi tạo
@stop
@section('body.content')
<div class="col-sm-12" >
	<form method="post" action="{{route('store')}}">
		@csrf
		<input type="text" name="title" placeholder="title" style="width: 60%; margin: 14% 0 0 20%;"><br>
		<input type="text" name="content" placeholder="Content" style="width: 60%; height: 300px; margin-left: 20%;"><br>
		<label for=""></label>
		<input type="submit" name="submit" value="Submit" style="margin-left: 20%;" class="btn btn-outline-success">
	</form>
</div>
@stop