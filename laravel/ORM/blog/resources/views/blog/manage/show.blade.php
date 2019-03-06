@extends('blog.layouts.master')
@section('head.title')
	Danh sách
@stop
@section('body.content')
 	<div class="container">
		<div class="col-sm-6">
			<a href="{{route('list')}}">&#8592; Black</a>
			<h4>{{$blogger->title}}</h4>
			<p>{{$blogger->content}}</p>
		</div>
 	</div>
@stop