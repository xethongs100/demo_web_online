<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Product;
use App\TypeProduct;
use App\Bill;
use App\Bill_Detail;
use App\Customer;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    //thêm sản phẩm vào giỏ hàng
    public function addCart($id,Request $request)
    {
        $product = Product::find($id);
        if($request->qty){
            $qty = $request->qty;
        }
        else{
            $qty = 1;
        }
        $cart = [
            'id' => $product->id, 
            'name'=> $product->name,
            'price'=> $product->promotion_price,
            'weight'=>0,
            'qty'=> $qty,
            'options'=>[
                'img'=> $product->image,
                'unit'=>$product->unit
            ]
        ];
        Cart::add($cart);
        return redirect('/')->with('thongbao','Thêm sản phẩm '.$product->name.' thành công');
    	
    }

    //danh sách giỏ hàng
    public function show_cart()
    {
    	$listCart = Cart::content();
    	$t_product = TypeProduct::all();
    	return view('gio-hang.cart',compact('t_product','listCart'));
    }

    //xóa giỏ hàng
    public function delete_cart($id)
    {
    	Cart::remove($id);
    	return back();
    }


    //update giỏ hàng
    public function updateCart(Request $request)
    {
    	if($request->ajax()){
    		$id = $request->id;
    		$qty = $request->qty;
    		Cart::update($id,$qty);
    		return "update";
    	}
    }

    public function view_dat_hang()
    {
        $listCart = Cart::content();
        $t_product = TypeProduct::all();
        if(Auth::check())
        {
            return view('gio-hang.dat_hang',compact('listCart','t_product'));
        }
        else{
            return redirect()->route('view_login');
        }
    }

    public function xu_ly_dat_hang(Request $rq)
    {
        $this->validate($rq,
            [
                'f_name' => 'required',
                'email' => 'required|email',
                'address' => 'required',
                'phone' => 'required|numeric|regex:[0[0-9]{9,12}]'
            ],

            [
                'f_name.required' => 'Họ tên không được để trống',
                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng',
                'address.required' => 'Địa chỉ không được để trống',
                'phone.required' => 'Số điện thoại không được để trống',
                'phone.numeric' => 'Số điện thoại  phải là số',
                'phone.regex' => 'Số điện thoại không đúng định dạng'
            ]
        );
        if(Auth::check())
        {
            $customer = new Customer();
            $customer->id_user = Auth::User()->id;
            $customer->name = $rq->f_name;
            $customer->gender = $rq->gender;
            $customer->email = $rq->email;
            $customer->address = $rq->address;
            $customer->phone_number = $rq->phone;
            $customer->note = $rq->note;
            $customer->save();

            $time = Carbon::now('Asia/Ho_Chi_Minh');

            foreach (Cart::content() as $list) {
                $bill = new Bill();
                $bill->id_user = Auth::User()->id;
                $bill->id_pro = $list->id;
                $bill->name = $list->name;
                $bill->unit = $list->options->unit;
                $bill->img = $list->options->img;
                $bill->price = $list->price;
                $bill->qty = $list->qty;
                $bill->total = $list->price*$list->qty;
                $bill->note = $rq->note;
                $bill->date = $time->toDateString();
                $bill->payment = $rq->payment_method;
                $bill->status = 0;
                $bill->save();
            }
            
        }
        Cart::destroy();
        return redirect()->route('home');
    }


    public function view_mua_hang()
    {
        $id = Auth::User()->id;
        if(Auth::check())
        {
            $t_product = TypeProduct::all();
            $bill = Bill::where('id_user','=',$id)->get();
            $customer = DB::table('customer')->where('id_user','=',$id)->first();
            return view('gio-hang.mua-hang',compact('t_product','bill','customer'));
        }
    }

    public function delete_don_hang($id)
    {
        $bill = Bill::find($id);
        $bill->delete();
        return back();
    }
}
