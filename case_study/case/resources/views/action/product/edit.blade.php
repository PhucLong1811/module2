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

		<form action="{{route('update' , $product->id)}}" method="post" class="beta-form-checkout" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-6">
					<div class="space20">&nbsp;</div>
					<div class="form-block">
						<label for="name">Name *</label>
						<input type="text" id="email" name="name" value="{{$product->name}}" required>
					</div>

					<div class="form-block">
						<label for="description">Chi Tiết*</label>
						<textarea type="text"  name="description" value="{{$product->description}}" required></textarea>
					</div>

					<div class="form-block">
						<label for="unit_price">Tiền*</label>
						<input type="number" id="adress" name="unit_price" value="Street Address" value="{{$product->unit_price}}" required>
					</div>
					<div class="form-block">
						<label for="promotion_price">Tiền giảm*</label>
						<input type="number" id="phone" name="promotion_price" value="{{$product->promotion_price}}">
					</div>
					<div class="form-block">
						<label for="image">Hình Ảnh*</label>
						<input type="file" id="phone" name="image" class="form-control-file" required>
					</div>
					<div class="form-block">
						<label for="unit">Số Lượng *</label>
						<input type="text" id="phone" name="unit" value="{{$product->unit}}" required>
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