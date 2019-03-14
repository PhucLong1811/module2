@extends('frontend.layout.user.master')
@section('content')
<form action="{{route('post.Slide')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	@csrf
	<input type="file" name="image">
	<input type="submit" name="sumbit" >
</form>
@endsection