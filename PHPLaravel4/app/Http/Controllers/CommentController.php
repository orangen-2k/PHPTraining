<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //

    public function getdelete($id, $idtintuc){
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('update.news',['id'=>$idtintuc])->with('Notification','Xóa comment '."[ $comment->noidung ]".' thành công');
    }
}
