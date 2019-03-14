@extends('layout.master')
@section('content')
<table>
	<caption>table title and/or explanatory text</caption>
	<thead>
		<tr>
			<th>Name</th>
			<th>Chi Tiết</th>
			<th>Tiền</th>
			<th>Tiền Giảm</th>
			<th>Ảnh</th>
			<th>Số Lượng</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
	</thead>
	<tbody>
		@foreach($product as $pro)
		<tr>
			<td>{{$pro->name}}</td>
			<td>{{$pro->description}}</td>
			<td>{{$pro->unit_price}}</td>
			<td>{{$pro->promotion_price}}</td>
			<td>
				@if($pro->image)
					<img src="{{asset('storage/'.$pro->image) }}"  style="width: 100px;">
					@else
					{{'Chưa có ảnh'}}
				@endif
			</td>
			<td>{{$pro->unit}}</td>
			<td><a href="{{route('edit' , $pro->id) }}" class="btn btn-outline-success">Edit</a></td>
			<td><a href="{{route('delete' , $pro->id) }}" class="btn btn-outline-success">Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection