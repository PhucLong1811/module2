@extends('layout.master')
@section('content')
<table>
	<thead>
		<tr>
			<th>Ảnh</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
	</thead>
	<tbody>
		@foreach($slide as $sli)
		<tr>
			<td>
				@if($sli->image)
				<img src="{{asset('storage/'.$sli->image) }}"  style="width: 100px;">
				@else
				{{'Chưa có ảnh'}}
				@endif
			</td>
			<td><a href="{{route('editslide' , $sli->id) }}" class="btn btn-outline-success">Edit</a></td>
			<td><a href="{{route('deleteslide' , $sli->id) }}" class="btn btn-outline-success">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection