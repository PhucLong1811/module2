@extends('blog.layouts.master')
@section('head.title')
Khởi tạo
@stop
@section('body.content')
<div class="col-sm-12" >
	<form method="post" action="{{route('store')}}" enctype="multipart/form-data">
		@csrf
		<input type="text" class="form-control"  name="title" placeholder="title" style="width: 60%; margin: 5% 0 1% 20%;">
		<textarea class="form-control"  name="content" placeholder="Content" style="width: 60%; height: 300px; margin-left: 20%;"></textarea>
		<input type="file" name="image" class="form-control-file" required style="margin-left: 20%;">
		<label style="margin-left: 20%;">Tỉnh thành</label>
                        <select class="form-control" name="category_id" style="width: 60%;margin-left: 20%;">
                            @foreach($category as $cate)
                                <option value="{{ $cate->id }}" >{{ $cate->name }}</option>
                            @endforeach
                        </select>
		<label for=""></label>
		<input type="submit" name="submit" value="Submit" style="margin-left: 19.7%;" class="btn btn-outline-success">
	</form>
</div>
@stop