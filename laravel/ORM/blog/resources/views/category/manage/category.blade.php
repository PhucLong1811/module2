@extends('blog.layouts.master')
@section('head.title')
Danh Mục
@stop
@section('body.content')
<div class="col-sm-12" >
	<form method="post" action="{{route('catestore')}}">
		@csrf
		<input type="text" class="form-control"  name="name" placeholder="title" style="width: 60%; margin: 14% 0 1% 20%;">
		<label for=""></label>
		<input type="submit" name="submit" value="Submit" style="margin-left: 19.7%;" class="btn btn-outline-success">
	</form>
</div>


@stop