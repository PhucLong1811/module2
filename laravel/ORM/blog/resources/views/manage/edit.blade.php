@extends('layouts.master')
@section('head.title')
Danh sách
@stop
@section('body.content')
<form method="post" action="{{route('update',$blogger->id)}}">
	@csrf
	<input type="text" name="title" value="{{$blogger->title}}" style="width: 60%; margin: 14% 0 0 20%;"><br>
	<input type="text" name="content" value="{{$blogger->content}}" style="width: 60%; height: 300px; margin-left: 20%;"><br>
	<input type="submit"  value="Submit" style="margin-left: 20%;" class="btn btn-outline-success">
</form>
@stop