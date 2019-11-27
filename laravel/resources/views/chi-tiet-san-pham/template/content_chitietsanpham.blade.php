<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">
					<div class="row">
				@if(isset($product)&&isset($type_product))
						<div class="col-sm-4">
							<img src="../../../../image/product/{{$product->image}}" alt="">
						</div>
						<div class="col-sm-8">
						
							<div class="single-item-body">
								<p class="single-item-title">{{$product->name}}</p>
								<p class="single-item-price">
									<span>Giá tiền:{{$product->promotion_price}}VNĐ</span>
								</p>
							</div>
							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
							</div>
							<div class="space20">&nbsp;</div>
							<div class="single-item-options">
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
				<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Description</a></li>
						@if(isset($count))
							<li><a href="#tab-reviews">Reviews ({{$count}})</a></li>
						@else
							<li><a href="#tab-reviews">Reviews (0)</a></li>
						@endif
						</ul>
						<div class="panel" id="tab-description">
							<p>{{$type_product->description}}</p>
						</div>
					
					<div class="panel" id="tab-reviews">
						<p>
					@if(Auth::check())
						<form method="post" action="{{route('comment',['id'=>$product->id,'id_type'=>$product->id_type,'id_user'=>Session::get('id')])}}">
						@csrf
								<div class="form-block">
									<label for="notes">Ghi bình luận</label>
									<textarea name="comment" id="notes" class="form-control"></textarea>
								</div>

								<div class="form-block">
									<input type="submit" name="" class="beta-btn primary" style="width:150px;" value="Gửi bình luận">
								</div>
						</form>
					@else
						<form method="post" action="{{route('comment',['id'=>$product->id,'id_type'=>$product->id_type,'id_user'=>0])}}">
						@csrf
								<div class="form-block">
									<label for="notes">Ghi bình luận</label>
									<textarea name="comment" id="notes" class="form-control"></textarea>
								</div>

								<div class="form-block">
									<input type="submit" name="" class="beta-btn primary" style="width:150px;" value="Gửi bình luận">
								</div>
						</form>
					@endif
						</p>
					<hr width="100%">
					@foreach($comment as $cm)
						<h6><b>{{$cm->name}}</b></h6>
						<p>Bình luận:{{$cm->comment}}</p>
						<p>{{$cm->date}}</p>
						<a href="" data-target="#modal-reply-comment" data-toggle="modal">Trả lời</a>&nbsp;&nbsp;&nbsp;&nbsp;
					@if(Auth::check())
						<a href="{{route('delete-comment',['id_comment'=>$cm->id,'id_pro'=>$cm->id_pro,'id_user'=>Session::get('id')])}}">Xóa</a> 
					@endif
						<br><hr width="100%">
					@endforeach
						</div>
					</div>

					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Quảng cáo</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.html"><img src="assets/dest/images/products/sales/1.png" alt=""></a>
									<div class="media-body">
										Sample Woman Top
										<span class="beta-sales-price">$34.55</span>
									</div>
								</div>
							</div>
						</div>
				@endif
					</div> <!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
</div> <!-- .container -->
@include('chi-tiet-san-pham.template.reply_comment')