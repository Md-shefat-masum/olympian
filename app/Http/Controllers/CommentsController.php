<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    public function store(Request $request, $post) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);

        $user = Auth::id();
        $comment = Comment::insert([
            'post_id' => $post,
            'name' => $request->name,
            'email' => $request->email,            
            'comment' => $request->comment,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($comment) {
            return back()->with('success', 'Comment Successfully published');
        }else {
            return back()->with('error', 'Comment was not published');
        }
    }
}
