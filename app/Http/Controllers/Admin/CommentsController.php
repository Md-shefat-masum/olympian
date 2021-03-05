<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CommentsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $comments = Comment::latest('id')->cursor();
        return view('admin.comment.comments', compact('comments'));
    }

    public function unpublish() {
        $id = $_POST['id'];
        
        $comment = Comment::where('id', $id)->delete();
        
        if($comment) {
            Session::flash('success', 'Comment deleted successfully');
            return redirect()->back();
        }else {
            Session::flash('error', 'An error occurred!');
            return redirect()->back();
        }
    }
}
