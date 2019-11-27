<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Customer;
class QuanLyHoaDonController extends Controller
{
    //
    public function view_hoa_don()
    {
    	$hoadon = Bill::all();
    	$customer = Customer::all();
    	return view('admin.hoadon.ds_hoadon',compact('hoadon','customer'));
    }

    public function xac_nhan($id)
    {
    	$bill = Bill::find($id);
    	$bill->status = 1;
    	$bill->save();
    	//dd($bill);
    	return redirect('admin/danh-sach-hoa-don');
    }
}
