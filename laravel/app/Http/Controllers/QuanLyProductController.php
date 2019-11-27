<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\TypeProduct;
use Illuminate\Support\Facades\DB;
use App\Rules\checkName;
class QuanLyProductController extends Controller
{
    //
    public function view_ds_san_pham()
    {
    	$product = Product::all();
    	$t_product = TypeProduct::all();
    	return view('admin.product.ds_product',compact('product','t_product'));
    }

    public function view_add()
    {
        $t_product = TypeProduct::all();
        return view('admin.product.template.add_product',compact('t_product'));
    }

    public function add_product(Request $rq)
    {
    	$this->validate($rq,
    		[
    			'ten_san_pham'=>'required|unique:product,name',
    			'price'=>'required',
    			'myFile'=>'image|required|mimes:jpeg,png,jpg,gif|max:2048',
    			'unit'=>'required',
    		],
    		[
    			'ten_san_pham.required'=>'Tên sản phẩm không được để trống',
                'ten_san_pham.unique'=>'Tên sản phẩm đã tồn tại',
    			'myFile.required'=>'Ảnh sản phẩm không được để trống',
    			'myFile.image'=>'Không đúng định dạng',
    			'myFile.mimes'=>'Không đúng loại ảnh jpeg,png,jpg,gif,svg',
    			'myFile.max'=>'Kích thước ảnh quá lớn',
    			'unit.required'=>'Đơn vị sản phẩm không được để trống',
    		]
    	);

        if($rq->hasFile('myFile'))
        {
            $image = $rq->file('myFile');
            $namefile = $image->getClientOriginalName();
            $image->move('image\product',$namefile);

            $product = new Product();
            $product->id_type = $rq->id_type;
            $product->name = $rq->ten_san_pham;
            $product->description = "";
            $product->unit_price = 0;
            $product->promotion_price = $rq->price;
            $product->image = $namefile;
            $product->unit = $rq->unit;

            $product->save();
            return redirect('admin/danh-sach-product')->with('thongbao','Thêm sản phẩm thành công');
        }
    }


    public function edit($id)
    {
        $product = Product::find($id);
        $t_product = TypeProduct::all();
        $type = TypeProduct::find($product->id_type);
        ///dd();
        return view('admin.product.template.content_edit_product',compact('product','t_product','type'));
    }

    public function update($id,Request $rq)
    {
        $this->validate($rq,
            [
                'ten_san_pham'=>'required|unique:product,name',
                'price'=>'required',
                'myFile'=>'image|mimes:jpeg,png,jpg,gif|max:2048',
                'unit'=>'required',
            ],
            [
                'ten_san_pham.required'=>'Tên sản phẩm không được để trống',
                'ten_san_pham.unique'=>'Tên sản phẩm đã tồn tại',
                'myFile.image'=>'Không đúng định dạng',
                'myFile.mimes'=>'Không đúng loại ảnh jpeg,png,jpg,gif,svg',
                'myFile.max'=>'Kích thước ảnh quá lớn',
                'unit.required'=>'Đơn vị sản phẩm không được để trống',
            ]
        );

        if($rq->hasFile('myFile'))
        {
            $image = $rq->file('myFile');
            $namefile = $image->getClientOriginalName();
            $image->move('image\product',$namefile);

            $product = Product::find($id);
            $product->id_type = $rq->id_type;
            $product->name = $rq->ten_san_pham;
            $product->description = "";
            $product->unit_price = 0;
            $product->promotion_price = $rq->price;
            $product->image = $namefile;
            $product->unit = $rq->unit;

            $product->save();
            return redirect('admin/danh-sach-product')->with('thongbao','Cập nhật sản phẩm thành công');
        }
        else{
            $product = Product::find($id);
            $product->id_type = $rq->id_type;
            $product->name = $rq->ten_san_pham;
            $product->description = "";
            $product->unit_price = 0;
            $product->promotion_price = $rq->price;
            $product->unit = $rq->unit;

            $product->save();
            return redirect('admin/danh-sach-product')->with('thongbao','Cập nhật sản phẩm thành công');
        }
    }

    public function delete($id)
    {
    	$product = Product::find($id);
    	$product->delete();
    	return redirect("admin/danh-sach-product");
    }
}
