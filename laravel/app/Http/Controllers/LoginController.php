<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\TypeProduct;
use Mail;
use App\User;
use Hash;
class LoginController extends Controller
{
    //

    public function view_login()
    {
        $t_product = TypeProduct::all();
        return view('login',compact('t_product'));
    }

    public function Login(Request $rq)
    {
    	//kiem tra nguoi dung nhap chua
    	$this->validate($rq,
			[
				'l_email'=>'required|email',
				'l_password'=>'required'
			],

			[
				'l_email.required'=>'Email không được để trống',
				'l_email.email'=>'email không đúng định dạng',
				'l_password.required'=>'Password không được để trống'
			]
    	);

    	if(Auth::attempt(['email'=>$rq->l_email,'password'=>$rq->l_password]))
    	{
    		if(Auth::User()->role==2){
                $rq->session()->put('name',Auth::User()->email);
                $rq->session()->put('id',Auth::User()->id);
                $t_product = TypeProduct::all();
    			return view('admin.layout',compact('t_product'));
    		}

    		else{
    			//lưu email và id người dùng bằng session
	            $rq->session()->put('name',Auth::User()->email);
	            $rq->session()->put('id',Auth::User()->id);
	            //chuyển trang về trang chủ
	            return redirect('/');
    		}
    	}
    	else{
            return redirect()->back()->with('error','Email hoặc mật khẩu sai');
        }
    }

    public function Logout(Request $rq)
    {
    	$rq->session()->flush();
        Auth::logout();
        return redirect('/');
    }

    public function view_reset_pass()
    {
        $t_product = TypeProduct::all();
        return view('user.form-reset-pass',compact('t_product'));
    }

    public function view_new_pass($code)
    {

        $listUser = User::all();
        //dd($code);
        foreach ($listUser as $value) {
            if(Hash::check($value->email,$code))
            {
                $t_product = TypeProduct::all();
                $user = User::where('email',$value->email)->get();
                //dd($t_product);
                return view('user.profile.form-new-pass',compact('t_product','user'));
                break;
            }
        }
    }

    public function NewPass($id,Request $rq)
    {
        $this->validate($rq,
            [
                'new_pass'=>'required|same:re_new_pass',
                're_new_pass'=>'required',
            ],
            [
                'new_pass.required'=>'Vui lòng nhập mật khẩu mới',
                're_new_pass.required'=>'Vui lòng nhập lại mật khẩu mới',
                'new_pass.same'=>'Mật khẩu không khớp',
            ]
        );
        $user = User::find($id);

        $user->password = Hash::make($rq->new_pass);
        $user->save();
        return redirect()->route('view_login');
    }

    public function sendMail(Request $rq)
    {
        //$user = User::where('email','like',$rq->send_email)->get();
        $data = array('email'=>$rq->send_email,'code'=>Hash::make($rq->send_email));
        Mail::send('user.profile.template.content_mail_send',$data,function($message) use ($data){
            $message->to($data['email'],'Admin')->subject('Lấy lại mật khẩu từ Alley Baker');
        });
        return back()->with('success','Gửi xác nhận thành công');
    }
}
