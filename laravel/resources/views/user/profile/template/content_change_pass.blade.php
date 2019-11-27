<br><br>
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="err_msg">
                @if(Session::has('change'))
                    <div class="alert alert-success">
                        {{Session::get('change')}}
                    </div>
                @endif
            </div>
            <div class="col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Change password</div>
                    <div class="panel-body">
                    	@if(isset($user))
                        <form method="post" action="{{route('c_password',['id'=>$user->id])}}">
                        	@csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="f_name">Mật khẩu cũ*</label>
                                    <input type="password" id="f_name" name="change_pass1" class="form-control">
                                @if($errors->has('change_pass1'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('change_pass1')}}
                                    </div>
                                @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="f_name">Mật khẩu mới*</label>
                                    <input type="password" id="l_name" name="change_pass2" class="form-control">
                                @if($errors->has('change_pass2'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('change_pass2')}}
                                    </div>
                                @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="mobile">Nhập lại mật khẩu mới*</label>
                                    <input type="password" id="mobile" name="change_pass3" class="form-control">
                                @if($errors->has('change_pass3'))
                                    <div class="alert alert-danger">
                                        {{$errors->first('change_pass3')}}
                                    </div>
                                @endif
                                </div>
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-12">
                                    <br>
                                    <input type="submit" class="btn btn-primary" value="Thay đổi" name="change_password" id="signup_btn">
                            </div>
                        </div>
                    </div>
                    </form>
                    @endif
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    </div>