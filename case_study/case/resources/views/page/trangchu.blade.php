@extends('layout.master')
@section('content')
<div class="fullwidthbanner-container" >
	<div class="fullwidthbanner">
		<div class="bannercontainer" >
			<div class="banner" >
				<ul>
					@foreach($slide as $sli)
					<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						<div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
							<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="{{asset('storage/'.$sli->image) }}" data-src="{{asset('storage/'.$sli->image) }}" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{asset('storage/'.$sli->image) }}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
							</div>
						</div>
					</li>
					@endforeach
				</ul>
			</div>
		</div>

		<div class="tp-bannertimer"></div>
	</div>
</div>
<!--slider-->
</div>
<div class="container-fluid" style="background: #f2f2f2;">
	<div id="content" class="space-top-none">
		<div class="main-content">
			<div class="space60">&nbsp;</div>
			<div class="row">
				<div class="col-sm-2">
					
				</div>
				<div class="col-sm-10">
					<div class="beta-products-list">
						<h4>Sản Phẩm</h4>
						<div class="beta-products-details">
							<p class="pull-left">Có {{count($new_product)}} sản phẩm</p>
							<div class="clearfix"></div>
						</div>

						<div class="row">
							@foreach($new_product as $new)
							<div class="col-sm-3">
								<div class="single-item">
									@if($new->promotion_price != 0)
									<div class="ribbon-wrapper">
										<div class="ribbon sale">
											sale
										</div>
									</div>
									@endif
									<div class="single-item-header">
										<a href="product.html"><img src="{{asset('storage/'.$new->image) }}" width="200px;"></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title">{{$new->name}}</p>
										<p class="single-item-price">
											@if($new->promotion_price == 0)
											<span class="float-sale">${{$new->unit_price}}</span>
											@else
											<span class="flash-del">${{$new->unit_price}}</span>
											<span class="float-sale">${{$new->promotion_price}}</span>
											@endif
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" style="margin-bottom: 30px;" href="{{route('ShowSP',$new->id)}}">Details <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div> <!-- .beta-products-list -->
					<div class="row">
						{{$new_product->links()}}						
					</div>
					<div class="space50">&nbsp;</div>
				</div>
			</div> <!-- end section with sidebar and main content -->


		</div> <!-- .main-content -->
</div> <!-- #content -->
@endsection