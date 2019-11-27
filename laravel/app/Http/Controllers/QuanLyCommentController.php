<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class QuanLyCommentController extends Controller
{
    //
    public function listComment()
    {
    	$comment = Comment::all();
    	return view('admin.comment.ds_comment',compact('comment'));
    }

    public function listDelComment()
    {
    	$delComment = Comment::onlyTrashed()->get();
    	return view('admin.comment.ds_comment_delete',compact('delComment'));
    	//dd($delComment);
    }

    public function phuc_hoi_comment_delete($id)
    {
    	$delComment = Comment::where('id','=',$id)->restore();
    	return redirect('admin/danh-sach-comment');
    }

    public function destroy($id)
    {
        Comment::find($id)->delete();
        return back()->with('delete','Xóa thành công');
    }
}
