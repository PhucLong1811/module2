@extends('layout.master')
@section('content')
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Thông Tin</h6>
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

		<form action="" method="post" class="beta-form-checkout">
			@csrf
			<div class="row">
				<div class="col-sm-6">
					<h4>Thông Tin</h4>
					<div class="space20">&nbsp;</div>
					<div class="form-block">
						<label for="your_last_name">Fullname*</label>
					</div>

					<div class="form-block">
						<label for="adress">Address*</label>
					</div>
					<div class="form-block">
						<label for="phone">Phone*</label>
					</div>
					<div class="form-block">
						<button type="submit" class="btn btn-primary">Register</button>
					</div>
				</div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection