<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog() {
        return view('website.blog');
    }

    public function details($id) {
        $postsingle = Post::findOrFail($id);
        return view('website.blogdetails', compact('postsingle'));
    }
}
