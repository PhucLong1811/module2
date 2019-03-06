	@extends('blog.layouts.master')
@section('head.title')
Danh Mục
@stop
@section('body.content')
<div class="col-sm-12">
	
	<table style="border: 1px solid #000; margin-top: 10%" align="center">
		@foreach ($category as $cate)

		<tbody>
			<tr">
				<td style="border-right: 1px solid #000;">{{$cate->name}}</td>
				<td><a href="{{route('cateedit', $cate->id) }}" class="btn btn-outline-success">Edit</a></td>
				<td><a href="{{route('catedel', $cate->id) }}" class="btn btn-outline-success">Delete</a></td>
			</tr>
		</tbody>
		@endforeach
	</table>
	
</div>
@stop
