<div class="container">
		<div id="content">
			<form action="{{route('xu_ly_login')}}" method="post">
				@csrf
				<input type="hidden" name="_token" id="csrf-token" value="{{ csrf_token() }}"/>
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						@if(Session::has('error'))
	                    	<div class="alert alert-danger">
	                    		{{Session::get('error')}}
	                    	</div>
                    	@endif
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						@if($errors->any())
							@foreach($errors->all() as $error)
		                    	<div class="alert alert-danger">
		                    		<ul>
		                    			<li>{{$error}}</li>
		                    		</ul>
		                    	</div>
	                    	@endforeach
                    	@endif
					</div>
				</div>
				<div class="row">
					<div class="col-sm-2"></div>
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						<div class="space20">&nbsp;</div>
						<div class="form-block">
							<label for="l_email">Email address*</label>
                            <input type="text" id="f_name" name="l_email" class="form-control">
						</div>
						<div class="form-block">
							<label for="l_password">Password*</label>
                            <input type="password" id="f_name" name="l_password" class="form-control">
						</div>
						
					</div>
					<div class="col-sm-4">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4"></div>
					<div class="col-sm-4">
						<div class="form-block">
							<button type="submit" class="btn btn-warning" style="width:340px;">Login</button>
							<br></br>
							<a href="{{ route('facebook.login') }}" style="width:340px;" class="btn btn-primary"><i class="fa fa-facebook" style="font-size:120%;"></i>Login with Facebook</a>
							<br></br>
							<a href="{{route('view_reset')}}" style="text-decoration:none;font-size:15px;">Quên mật khẩu?</a>
						</div>
					</div>
					<div class="col-sm-4"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->