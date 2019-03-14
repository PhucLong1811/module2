@extends('layout.master')
@section('content')
<table>
	<caption>table title and/or explanatory text</caption>
	<thead>
		<tr>
			<th>Name</th>
			<th>Chi Tiết</th>
			<th>Ảnh</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
	</thead>
	<tbody>
		@foreach($type as $t)
		<tr>
			<td>{{$t->name}}</td>
			<td>{{$t->description}}</td>
			<td>
				@if($t->image)
					<img src="{{asset('storage/'.$t->image) }}"  style="width: 100px;">
					@else
					{{'Chưa có ảnh'}}
				@endif
			</td>
			<td><a href="{{route('editType' , $t->id) }}" class="btn btn-outline-success">Edit</a></td>
			<td><a href="{{route('deleteType' , $t->id) }}" class="btn btn-outline-success">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection