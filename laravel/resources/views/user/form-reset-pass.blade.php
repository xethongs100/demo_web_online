@extends('layout')
@section('content')
	<div class="container">
		<div id="content">
			<form action="{{route('send_mail')}}" method="post" class="">
				@csrf
				<div class="row">
					
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						@if(Session::has('success'))
	                        <div class="alert alert-success">
	                            {{Session::get('success')}}
	                        </div>
                    	@endif
						<h4>Lấy lại mật khẩu</h4>
						<div class="space20">&nbsp;</div>
                        <input type="text" id="send_email" name="send_email" class="form-control" placeholder="Nhập vào email để lấy lại mật khẩu">
                        <br>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Gửi xác nhận</button>
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection