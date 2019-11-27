
<p><br></p>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    <h6>{{ Session::get('success') }}</h6>
                </div>
            @endif
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Profile User</div>
                <div class="panel-body">
                    @if(isset($user))
                    <form method="post" action="{{route('thay_doi_profile',['id'=>$user->id])}}">
                    	@csrf
                        <div class="row">
                                <div class="col-md-12">
	                                <div class="text-center">
                                    <img src="../image/avatar.png" style="width:180px;" class="avatar img-circle img-thumbnail" alt="avatar">
                                    <h5>Photo profile</h5>
                                    </div></hr><br>
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="f_name">Họ tên*</label>
                                <input type="text" id="f_name" name="change_f_name" class="form-control" value="{{$user->full_name}}"  >
                                <br>
                                @if($errors->has('change_f_name'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('change_f_name') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <label for="mobile">Số điện thoại*</label>
                                <input type="text" id="mobile" name="change_mobile" class="form-control" value="{{$user->phone}}" >
                                <br>
                                @if($errors->has('change_mobile'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('change_mobile') }}
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="address1">Địa chỉ*</label>
                                <input type="textarea" id="address1" name="change_address" class="form-control" value="{{$user->address}}" >
                                <br>
                                @if($errors->has('change_address'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('change_address') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-primary" value="Edit Personal Information" name="edit_profile" id="signup_btn">
                                <a href="{{route('view_change_pass',['id'=>$user->id])}}" class="btn btn-primary">Change Password</a>
                            </div>
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
<div class="foot">