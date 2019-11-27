<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\TypeProduct;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PageController extends Controller
{
    //

	public function view_home()
	{
		$product = DB::table('product')->paginate(12);
		$t_product = TypeProduct::all();
	    return view('index',compact('product','t_product'));
	}

    public function type_product($name,$id)
    {
    	$typeProduct = Product::where('id_type','=',$id)->get();
    	$t_product = TypeProduct::all();
    	//dd($typeProduct);
    	return view('product_type.type_product',compact('typeProduct','t_product'));
    }

    public function view_chi_tiet_sp(Request $rq,$id,$id_type)
    {
        $t_product = TypeProduct::all();
        $product = Product::find($id);
        $type_product = TypeProduct::find($id_type);
        $comment = Comment::where('id_pro','=',$id)->get();
        $count = Comment::where('id_pro','=',$id)->count();
        return view('chi-tiet-san-pham.chi_tiet_product',compact('t_product','product','type_product','comment','count'));
        //dd($count);
    }

    public function request_comment(Request $rq,$id,$id_type,$id_user)
    {
        if(Auth::check()){
            $user = User::find($id_user);
            $comment = new Comment();
            $comment->id_user = $id_user;
            $comment->id_pro = $id;
            $comment->name = $user->full_name;
            $comment->id_type = $id_type;
            $comment->comment = $rq->comment;
            $comment->date = Carbon::now('Asia/Ho_Chi_Minh');
            $comment->save();

            // $t_product = TypeProduct::all();
            // $product = Product::find($id);
            // $type_product = TypeProduct::find($id_type);
            // $comment = DB::table('comment')->where('id_pro',$id)->get();
            // return view('chi-tiet-san-pham.chi_tiet_product',compact('t_product','product','type_product','comment'));
            return redirect('detail/san-pham/'.$id.'/'.$id_type);
        }
        else{
            return redirect()->route('view_login');
        }
    }

    public function xoa_comment($id_comment,$id_pro,$id_user)
    {
        $user = Comment::where([
            ['id_user','=',$id_user],
            ['id_pro','=',$id_pro],
            ['id','=',$id_comment],
        ])->delete();
        // dd($user);
        // Comment::find($id)->delete();
        return redirect()->back();
    }

    public function seach(Request $rq)
    {
        // $result = str_replace(' ', '%', $rq->seach);
        $product = Product::where('name','like','%'.$rq->seach.'%')->orWhere('promotion_price','like',$rq->seach)->get();
        //dd($product);
        $t_product = TypeProduct::all();
        return view('template.seach',compact('product','t_product'));
    }
}
