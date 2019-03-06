@extends('blog.layouts.master')
@section('head.title')
Danh sách
@stop
@section('body.content')
<form method="post" action="{{route('update',$blogger->id)}}">
	@csrf
	<input type="text" name="title" value="{{$blogger->title}}" style="width: 60%; margin: 12% 0 1% 20%;" class="form-control"><br>
	<textarea class="form-control"  name="content"  style="width: 60%; height: 300px; margin-left: 20%;">{{$blogger->content}}</textarea>
	<input type="submit"  value="Submit" style="margin-left: 20%;" class="btn btn-outline-success">
</form>
@stop