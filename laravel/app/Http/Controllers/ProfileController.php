<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TypeProduct;
use App\Rules\checkPass;
use Hash;
class ProfileController extends Controller
{
    //
    public function view_profile($id)
    {
    	$user = User::find($id);
        if($user->role==2)
        {
            return view('admin.layout');
        }
        else{
            
            $t_product = TypeProduct::all();
            return view('user.profile.profile_user',compact('t_product','user'));
        }
    	
    }

    public function change_profile(Request $rq,$id)
    {
    	$this->validate($rq,
    		[
    			'change_f_name'=>'required',
    			'change_mobile'=>'required',
    			'change_address'=>'required'
    		],

    		[
    			'change_f_name.required'=>'*Họ tên không được để trống',
    			'change_mobile.required'=>'*Số điện thoại không được để trống',
    			'change_address.required'=>'*Địa chỉ không được để trống'
    		]
    	);
    	$user = User::find($id);
    	$user->full_name = $rq->change_f_name;
    	$user->phone = $rq->change_mobile;
    	$user->address = $rq->change_address;

    	$user->save();
    	return back()->with('success','Thay đổi thông tin cá nhân thành công');
    }

    public function view_change_password($id)
    {
    	$user = User::find($id);
    	$t_product = TypeProduct::all();
    	return view('user.profile.profile_change_password',compact('user','t_product'));
    }

    public function xu_ly_change_pass(Request $rq,$id)
    {
    	 $this->validate($rq,
            [
                'change_pass1'=>['required',new checkPass],
                'change_pass2'=>'required|same:change_pass3',
                'change_pass3'=>'required'
            ],

            [
                'change_pass1.required'=>'Vui lòng nhập mật khẩu cũ',
                'change_pass2.required'=>'Vui lòng nhập mật khẩu mới',
                'change_pass3.required'=>'Vui lòng nhập lại mật khẩu mới',
                'change_pass2.same' => 'Mật khẩu mới không trùng khớp',
            ]
        );
        $user = User::find($id);
        $user->password = hash::make($rq->change_pass2);

        $user->save();
        return redirect()->back()->with('change','Thay đổi mật khẩu thành công');
    }
}
