<div class="container">
		<div id="content">
			<form action="{{route('xu_ly_register')}}" method="post" class="">
				@csrf
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    </div>
                    <div class="col-sm-3"></div>
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
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>
						<div class="form-block">
                            <label for="email">Email address*</label>
                            <input type="text" id="f_name" name="email" class="form-control">
						</div>

						<div class="form-block">
                            <label for="f_name">Fullname*</label>
                            <input type="text" id="f_name" name="full_name" class="form-control">
						</div>

                        <div class="form-block">
                              <label for="password">Password*</label>
                            <input type="password" id="f_name" name="password" class="form-control">
                        </div>

                        <div class="form-block">
                            <label for="re_password">Re-password*</label>
                            <input type="password" id="f_name" name="re_password" class="form-control">
                        </div>

						<div class="form-block">
                            <label for="address">Address*</label>
                            <input type="text" id="f_name" name="address" class="form-control">
						</div>

						<div class="form-block">
                              <label for="phone">Phone*</label>
                            <input type="text" id="f_name" name="phone" class="form-control">
						</div>
						
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->