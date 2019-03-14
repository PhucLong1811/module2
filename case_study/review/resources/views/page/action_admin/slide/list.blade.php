@extends('frontend.layout.user.master')
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

		</tr>
		@endforeach
	</tbody>
</table>
@endsection