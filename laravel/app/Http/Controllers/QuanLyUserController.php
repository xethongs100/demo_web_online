<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class QuanLyUserController extends Controller
{
    //
    public function view_user()
    {
    	$user = User::all();
    	return view('admin.user.content_ds_user',compact('user'));
    }

    public function detail(Request $rq,$id)
    {
    	if($rq->ajax())
    	{
    		$user = User::find($id);
    		return response()->json(['data'=>$user],200);
    	}
    }

    public function edit(Request $rq,$id)
    {
    	if($rq->ajax())
    	{
    		$user = User::find($id);
    		return response()->json(['data'=>$user],200);
    	}
    }

    public function update(Request $rq,$id)
    {
    	if($rq->ajax())
    	{
    		$user = User::find($id);
    		$user->full_name = $rq->hoten;
    		$user->phone = $rq->dienthoai;
    		$user->address = $rq->diachi;
    		$user->save();

    		return response()->json(['data'=>'Cập nhật người dùng thành công'],200);
    	}
    }

    public function destroy($id)
    {
    	User::find($id)->delete();
    	return redirect()->route('dsach-user');
    }
}
