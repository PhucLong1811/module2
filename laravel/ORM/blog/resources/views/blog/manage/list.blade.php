@extends('blog.layouts.master')
@section('head.title')
Danh sách
@stop
@section('body.content')
@foreach ($blogger as $blog)
<div align="center">
	<h3>{{$blog->title}}</h3>
	<p>{{$blog->content}}</p>
	<p>{{$blog->category->name}}</p>
	<p>
		@if($blog->image)
		<img src="{{ asset('storage/'.$blog->image) }}" alt="" style="width: 100px;">
		@else
		{{'Chưa có ảnh'}}
		@endif
	</p>
	<a href="{{route('show' , $blog->id) }}" class="btn btn-outline-success">Show</a>
	<a href="{{route('edit' , $blog->id) }}" class="btn btn-outline-success">Edit</a>
	<a href="{{route('delete' , $blog->id) }}" class="btn btn-outline-success">Delete</a>
</div>	

@endforeach
<div style="position: absolute; right: 20%; top: 90%">
	{{ $blogger->links()}}
</div>
@stop