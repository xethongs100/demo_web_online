<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeProduct;
use Carbon\Carbon;
use Validator;
class QuanLyTypeProductController extends Controller
{
    //
    public function index()
    {
    	$type = TypeProduct::all();
    	return view('admin.LoaiSanPham.ds_loai_san_pham',compact('type'));
    }

    public function add_type(Request $rq)
    {
    	$validator = Validator::make($rq->all(),
    		[
    			"name"=>'required|unique:type_product,name',
    		],
    		[
    			'name.required'=>'Tên loại không được bỏ trống',
    			'name.unique'=>'Tên loại đã tồn tại',
    		]
    	);
    	if($validator->passes())
    	{
    		if($rq->ajax()){
	    		$type = new TypeProduct();
		    	$type->name = $rq->name;
		    	$type->description = $rq->description;
		    	$type->created_at = Carbon::now('Asia/Ho_Chi_Minh');
		    	$type->save();

		    	return response()->json(['message'=>'Thêm thành công'],200);
    		}
    	}
    	return response()->json(['error'=>$validator->errors()->all()],200);
    }

    public function show($id)
    {
    	$object = TypeProduct::find($id);
    	return response()->json(['data'=>$object],200);
    }

    public function edit($id)
    {
    	$object = TypeProduct::find($id);
    	return response()->json(['data'=>$object],200);
    }

    public function update($id,Request $rq)
    {
    	$validator = Validator::make($rq->all(),
    		[
    			"name"=>'required|unique:type_product,name',
    		],
    		[
    			'name.required'=>'Tên loại không được bỏ trống',
    			'name.unique'=>'Tên loại đã tồn tại',
    		]
    	);

    	if($validator->passes())
    	{
    		if($rq->ajax()){
	    		$type = TypeProduct::find($id);
		    	$type->name = $rq->name;
		    	$type->description = $rq->description;
		    	$type->save();

		    	return response()->json(['message'=>'Thêm thành công'],200);
    		}
    	}
    	return response()->json(['error'=>$validator->errors()->all()],200);
    }
}
