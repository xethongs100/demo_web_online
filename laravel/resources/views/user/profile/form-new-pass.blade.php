@extends('layout')
@section('content')
	<div class="container">
		<div id="content">
		@foreach($user as $ds)
			<form action="{{route('new_password',['id'=>$ds->id])}}" method="post" class="">
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
		                    		<ul style="list-style-type: none;">
		                    			<li>{{$error}}</li>
		                    		</ul>
		                    	</div>
	                    	@endforeach
                    	@endif
                	</div>
                	<div class="col-sm-3"></div>
                </div>
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đặt lại mật khẩu</h4>
						<div class="space20">&nbsp;</div>

                        <div class="form-block">
                            <label for="password">New-Password*</label>
                            <input type="password" id="new_pass" name="new_pass" class="form-control">
                        </div>

                        <div class="form-block">
                            <label for="re_password">Re-NewPassword*</label>
                            <input type="password" id="re_new_pass" name="re_new_pass" class="form-control">
                        </div>

						<div class="form-block">
							<button type="submit" class="btn btn-primary">Xác nhận</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		@endforeach
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection