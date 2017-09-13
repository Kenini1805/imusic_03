<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function getdelete($id, $fileid)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('admin/file/edit/'.$fileid);
    }
}
