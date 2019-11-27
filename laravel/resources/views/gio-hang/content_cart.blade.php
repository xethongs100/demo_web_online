<div class="container">
	
		<div id="content">
			<div class="table-responsive">
			
				<!-- Shop Products Table -->
				<table class="shop_table beta-shopping-cart-table" cellspacing="0">
					<thead>
						<tr>
							<th class="product-name">Sản phẩm</th>
							<th class="product-price">Giá tiền</th>
							<th class="product-status">Trạng thái</th>
							<th class="product-quantity">Số lượng</th>
							<th class="product-subtotal">Tổng tiền</th>
							<th class="product-remove">Thao tác</th>
						</tr>
					</thead>
					<tbody>
					<form method="POST" action="">
						<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}"/>
						@foreach($listCart as $ds)
						<tr class="cart_item">
							<td >
								<div class="media">
									<img class="pull-left" src="../image/product/{{$ds->options->img}}" style="width:80px;height:60px;" alt="">
									<div class="media-body">
										<p class="font-large table-title">{{$ds->name}}</p>
										<p class="cart-item-options">Đơn vị:{{$ds->options->unit}}</p>
									</div>
								</div>
							</td>

							<td >
								<span class="amount">{{$ds->price}}đ</span>
							</td>

							<td >
								Còn hàng
							</td>

							<td >
								<input type="number" name="qty" min="1" max="100" value="{{$ds->qty}}">
							</td>

							<td>
								<span class="amount">{{$ds->qty*$ds->price}}đ</span>
							</td>

							<th>
								<a href="" class="update" id="{{$ds->rowId}}"><p class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span></p></a>

								<a href="{{route('xoa-gio-hang',['id'=>$ds->rowId])}}"><p class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></p></a>
							</th>
						</tr>
						@endforeach
						</form>
					</tbody>

					<tfoot>
						<tr>
							<td colspan="6" class="actions">
								<a href="{{route('view-dat-hang')}}" class="beta-btn primary" name="proceed">Đặt hàng<i class="fa fa-chevron-right"></i></a>
							</td>
						</tr>
					</tfoot>
				</table>
				<!-- End of Shop Table Products -->
			
			</div>
			<!-- Cart Collaterals -->
			<!-- End of Cart Collaterals -->
			<div class="clearfix"></div>

		</div> <!-- #content -->
		
	</div> <!-- .container -->