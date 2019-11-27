<div class="container">
		<div id="content">
			@if(isset($customer))
				<h5 class="btn btn-danger">Địa chỉ giao hàng:(+084){{$customer->phone_number}}&nbsp-{{$customer->name}}&nbsp-{{$customer->address}}</h5>
			@endif
			<div class="table-responsive">
				<!-- Shop Products Table -->
				<br><br>
				<h5 class="btn btn-danger">Đơn mua đang giao hàng</h5>
				<table class="shop_table beta-shopping-cart-table" cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Sản phẩm</th>
							<th class="product-price">Giá tiền</th>
							<th class="product-status">Ghi chú</th>
							<th class="product-quantity">Số lượng</th>
							<th class="product-subtotal">Tổng tiền</th>
							<th class="product-remove">Thao tác</th>
						</tr>
					</thead>
					<tbody>
					@foreach($bill as $ds)
					@if($ds->status==0)
						<tr class="cart_item">
							<td >
								<div class="media">
									<img class="pull-left" src="../image/product/{{$ds->img}}" style="width:80px;height:60px;" alt="">
									<div class="media-body">
										<p class="font-large table-title">{{$ds->name}}</p>
										<p class="cart-item-options">Đơn vị:{{$ds->unit}}</p>
									</div>
								</div>
							</td>

							<td >
								<span class="amount">{{$ds->price}}</span>
							</td>

							<td >
								{{$ds->note}}
							</td>

							<td>
								{{$ds->qty}}
							</td>

							<td>
								<span class="amount">{{$ds->total}}</span>
							</td>
							<td>
								<a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="{{route('delete-don-hang',['id'=>$ds->id])}}"><p class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></p></a>
							</td>
						</tr>
					@endif
					@endforeach
					</tbody>
				</table>
				<!-- End of Shop Table Products -->
			</div>
			<!-- Cart Collaterals -->
			<!-- End of Cart Collaterals -->
			<div class="clearfix"></div>
		</div> <!-- #content -->
</div> <!-- .container -->