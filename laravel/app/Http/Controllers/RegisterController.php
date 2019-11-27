<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use App\TypeProduct;
class RegisterController extends Controller
{
    //

    public function view_register()
    {
        $t_product = TypeProduct::all();
        return view('user.register',compact('t_product'));
    }

    public function register(Request $req)
    {
    	$this->validate($req,

    		[
                'full_name'=>'required|regex:[^[a-zA-Z0-9]]',
                'email'=>'required|email|unique:user,email',
                'password'=>'required|regex:[^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,}$]|same:re_password',
                'phone'=>'required|numeric|regex:[0[0-9]{9}]',
                'address'=>'required',
                're_password'=>'required'
            ],

            [
                'full_name.required'=>'Vui lòng nhập tên đầy đủ',
                'full_name.regex'=>'Fullname có kí tự đặc biệt',
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email tồn tại',
                'password.required'=>'Vui lòng nhập password',
                'password.regex'=>'Password phải có 6 kí tự  1 kí tự viêt hoa và 1 kí tự đặc biệt',
                're_password.required'=>'Vui lòng nhập re_password',
                'phone.required'=>'Vui lòng nhập số điện thoại',
                'phone.regex'=>'Mobile phải bắt đầu bằng số 0 và mobile có 10 số',
                'phone.numeric'=>'Mobile phải là số',
                'address.required'=> "Vui lòng nhập địa chỉ!",
                'password.same'=>'Password và Re-password không khớp'
                //'mobile.max'=>'Mobile phải có 10 số',
            ]
    	);

    	$user = new User();
    	$user->full_name = $req->full_name;
    	$user->email = $req->email;
    	$user->password = Hash::make($req->password);
    	$user->address = $req->address;
    	$user->phone = $req->phone;
    	$user->role = 1;

    	$user->save();
    	return redirect()->back()->with('success','Đăng kí thành công');
    }
}
