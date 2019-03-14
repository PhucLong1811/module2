@extends('layout.master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Đăng kí</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb">
				<a href="index.html">Home</a> / <span>Đăng kí</span>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="container">
	<div id="content">

		<form action="{{route('updateslide' , $slide->id)}}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">
					<div class="space20">&nbsp;</div>
					<div class="form-block">
						<label for="image">Hình Ảnh*</label>
						<input type="file" id="phone" name="image" class="form-control-file" required>
					</div>
					<div class="form-block">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection