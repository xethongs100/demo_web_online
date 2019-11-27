<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($product as $ds)
							<form method="GET" action="{{route('them_san_pham',['id'=>$ds->id])}}">
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										<div class="single-item-header">
											<a href="{{route('chi_tiet_sp',['id'=>$ds->id,'id_type'=>$ds->id_type])}}"><img src="image/product/{{$ds->image}}" style="height:250px;" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$ds->name}}</p>
											<p class="single-item-price">
												<span class="flash-del">${{$ds->unit_price}}</span>
												<span class="flash-sale">${{$ds->promotion_price}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<input type="submit" name="" class="btn btn-success btn-xs" value="ADD">
											<a class="beta-btn primary" href="">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
									<br>
								</div>
							</form>
							@endforeach
							</div>
							<span">{{ $product->links() }}</span>
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->