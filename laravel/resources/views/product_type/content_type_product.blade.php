<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							<li><a href="#">Typography</a></li>
							<li><a href="#">Buttons</a></li>
							<li><a href="#">Dividers</a></li>
							<li><a href="#">Columns</a></li>
							<li><a href="#">Icon box</a></li>
							<li><a href="#">Notifications</a></li>
							<li><a href="#">Progress bars and Skill meter</a></li>
							<li><a href="#">Tabs</a></li>
							<li><a href="#">Testimonial</a></li>
							<li><a href="#">Video</a></li>
							<li><a href="#">Social icons</a></li>
							<li><a href="#">Carousel sliders</a></li>
							<li><a href="#">Custom List</a></li>
							<li><a href="#">Image frames &amp; gallery</a></li>
							<li><a href="#">Google Maps</a></li>
							<li><a href="#">Accordion and Toggles</a></li>
							<li class="is-active"><a href="#">Custom callout box</a></li>
							<li><a href="#">Page section</a></li>
							<li><a href="#">Mini callout box</a></li>
							<li><a href="#">Content box</a></li>
							<li><a href="#">Computer sliders</a></li>
							<li><a href="#">Pricing &amp; Data tables</a></li>
							<li><a href="#">Process Builders</a></li>
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($typeProduct as $ds)
								<<form method="GET" action="{{route('them_san_pham',['id'=>$ds->id])}}">
								<div class="col-sm-3">
									<div class="single-item">
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										<div class="single-item-header">
											<a href="{{route('chi_tiet_sp',['id'=>$ds->id,'id_type'=>$ds->id_type])}}"><img src="../../image/product/{{$ds->image}}" style="height:200px;" alt=""></a>
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
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->