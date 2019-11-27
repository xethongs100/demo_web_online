<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đặt hàng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{route('home')}}">Trang chủ</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
<div class="container">
	<div id="content">
		<form action="{{route('mua-hang')}}" method="post" class="beta-form-checkout">
			@csrf
			<div class="row">
				<div class="col-sm-6">
					<h4>Đặt hàng</h4>
					<div class="space20">&nbsp;</div>
					@if($errors->any())
							@foreach($errors->all() as $error)
		                    	<div class="alert alert-danger">
		                    		<ul>
		                    			<li>{{$error}}</li>
		                    		</ul>
		                    	</div>
	                    	@endforeach
                    @endif
					<div class="form-block">
						<label for="name">Họ tên*</label>
						<input type="text" name="f_name" id="name" placeholder="Họ tên" class="form-control">
					</div>

					<div class="form-block">
						<label>Giới tính </label>
						<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
						<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>
					</div>

					<div class="form-block">
						<label for="email">Email*</label>
						<input type="email" name="email" id="email" placeholder="expample@gmail.com" class="form-control">
					</div>

					<div class="form-block">
						<label for="adress">Địa chỉ*</label>
						<input type="text" name="address" id="adress" placeholder="Địa chỉ" class="form-control">
					</div>
					

					<div class="form-block">
						<label for="phone">Điện thoại*</label>
						<input type="text" name="phone" id="phone" placeholder="Số điện thoại" class="form-control">
					</div>
					
					<div class="form-block">
						<label for="notes">Ghi chú</label>
						<textarea name="note" id="notes" class="form-control"></textarea>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="your-order">
						<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
						<div class="your-order-body" style="padding: 0px 10px">
							<div class="your-order-item">
								<div>
								@foreach($listCart as $list)
								<!--  one item	 -->
									<div class="media">
										<img width="25%" src="../image/product/{{$list->options->img}}" alt="" class="pull-left">
										<div class="media-body">
											<p class="font-large">{{$list->name}}</p>
											<span class="color-gray your-order-info">Đơn vị:{{$list->options->unit}}</span>
											<span class="color-gray your-order-info">Số lượng:{{$list->qty}}</span>
										</div>
									</div>
								<!-- end one item -->
								@endforeach
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="your-order-item">
								<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
								<div class="pull-right"><h5 class="color-black">{{Cart::subtotal()}}VNĐ</h5></div>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
						
						<div class="your-order-body">
							<ul class="payment_methods methods">
								<li class="payment_method_bacs">
									<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" data-order_button_text="">
									<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
									<div class="payment_box payment_method_bacs" style="display: block;">
										Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng
									</div>						
								</li>

								<li class="payment_method_cheque">
									<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="ATM" data-order_button_text="">
									<label for="payment_method_cheque">Chuyển khoản </label>
									<div class="payment_box payment_method_cheque" style="display: none;">
										Chuyển tiền đến tài khoản sau:
										<br>- Số tài khoản: 0881000465084
										<br>- Chủ tài khoản: Nguyễn Việt Hân
										<br>- Ngân hàng Vietcombank, Chi nhánh Gia Định,Tp.HCM
									</div>						
								</li>
								
							</ul>
						</div>

						<div class="text-center"><input type="submit" class="beta-btn primary" value="Đặt hàng"></div>
					</div> <!-- .your-order -->
				</div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->