@extends('layout.master')
@section('content')
<div class="container">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="beta-products-list">
						<h4>Tìm Kiếm</h4>
						<div class="beta-products-details">
							<p class="pull-left">Có {{count($product)}} sản phẩm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($product as $pro)
							<div class="col-sm-3">
								<div class="single-item">
									@if($pro->promotion_price != 0)
									<div class="ribbon-wrapper">
										<div class="ribbon sale">
											sale
										</div>
									</div>
									@endif
									<div class="single-item-header">
										<a href="product.html"><img src="{{asset('storage/'.$pro->image) }}" width="200px;"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$pro->name}}</p>
										<p class="single-item-price">
											@if($pro->promotion_price == 0)
											<span class="float-sale">${{$pro->unit_price}}</span>
											@else
											<span class="flash-del">${{$pro->unit_price}}</span>
											<span class="float-sale">${{$pro->promotion_price}}</span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="{{route('ShowSP',$pro->id)}}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->
					<div class="space50">&nbsp;</div>
				</div>
			</div> <!-- end section with sidebar and main content -->
		</div> <!-- .main-content -->
	</div> <!-- #content -->
@endsection