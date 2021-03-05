<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $posts = Post::latest('id')->cursor();
        return view('admin.post.index', compact('posts'));
    }


    public function create() {
        $categories = Category::where('cate_status', 1)->get();
        return view('admin.post.create', compact('categories'));
    }


    public function store(Request $request) {
        $this->validate($request, [
            'post_title' => 'required',            
        ], [
            'post_title.required' => 'please enter post title',
        ]);

        $data = $request->all();

        $data['user_id'] = auth()->user()->id;
        $data['post_slug'] = Str::slug($request['post_title'], '-');        
        $data['post_image'] = null;
        $data['post_thumb'] = null;

        if($request->hasFile('post_image'))  {
            $data['post_image'] = $request->post_image->store('');
        }

        if($request->hasFile('post_thumb'))  {
            $data['post_thumb'] = $request->post_thumb->store('');
        }


        $postCreate = Post::create($data);

        $postCreate->categories()->attach($request['categories']);


        if($postCreate) {
            Session::flash('success', 'Successfully Created!');
            return redirect()->route('admin.posts.index');            
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.posts.index');            
        }

    }


    public function show(Post $post) {
        
    }

    public function edit(Post $post) {
        $categories = Category::where('cate_status', 1)->get();
        return view('admin.post.edit', compact('post', 'categories'));
    }


    public function update(Request $request, Post $post) {
        $this->validate($request, [
            'post_title' => 'required',            
        ], [
            'post_title.required' => 'please enter post title',
        ]);
            
        if($request->has('post_title') && $post->post_title != $request->post_title) {
            $post->post_title = $request->post_title;
            $data['post_slug'] = Str::slug($request['post_title'], '-');      
        }

        if($request->has('post_body1') && $post->post_body1 != $request->post_body1) {
            $post->post_body1 = $request->post_body1;
        }

        if($request->has('post_body2') && $post->post_body2 != $request->post_body2) {
            $post->post_body2 = $request->post_body2;
        }

        if($request->has('post_body3') && $post->post_body3 != $request->post_body3) {
            $post->post_body3 = $request->post_body3;
        }

        if($request->has('post_body4') && $post->post_body4 != $request->post_body4) {
            $post->post_body4 = $request->post_body4;
        }




        if($request->hasFile('post_image')) {
            if(Storage::exists($post->post_image)) {
                Storage::delete($post->post_image);
            }

            $post->post_image = $request->post_image->store('');
        }

        if($request->hasFile('post_thumb')) {
            if(Storage::exists($post->post_thumb)) {
                Storage::delete($post->post_thumb);
            }

            $post->post_thumb = $request->post_thumb->store('');
        }

        $post->categories()->sync($request->categories);

        $postSave = $post->save();


        if($postSave) {
            Session::flash('success', 'Successfully Updated!');
            return redirect()->route('admin.posts.index');
        }else {
            Session::flash('success', 'An Error Occurred!');
            return redirect()->route('admin.posts.index');
        }


    }

 
    public function unpublish() {
        $id = $_POST['id'];
        
        $del = Post::where('id', $id)->delete();
        
        if($del) {
            Session::flash('success', 'Successfully Deleted!');
            return redirect()->route('admin.posts.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.posts.index');
        }
    }

}
