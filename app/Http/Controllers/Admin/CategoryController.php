<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $categories = Category::latest('id')->cursor();
        return view('admin.category.index', compact('categories'));
    }


    public function create() {
        return view('admin.category.create');
    }


    public function store(Request $request) {
        $this->validate($request, [
            'cate_name' => 'required|unique:categories,cate_name,',          
        ], [
            'cate_name.required' => 'please enter category name',
        ]);

        $data = $request->all();
        $data['cate_slug'] = Str::slug($request['cate_name'], '-');

        $categoryCreate = Category::create($data);

        if($categoryCreate) {
            Session::flash('success', 'Successfully Created!');
            return redirect()->route('admin.categories.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.categories.index');
        }

    }


    public function edit(Category $category) {        
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category) {        
        $this->validate($request, [
            'cate_name' => 'required|unique:categories,cate_name,' . $category->id,          
        ], [
            'cate_name.required' => 'please enter category name',
        ]);

        if($request->has('cate_name') && $category->cate_name != $request->cate_name) {
            $category->cate_name = $request->cate_name;
        }

        $categorySave = $category->save();


        if($categorySave) {
            Session::flash('success', 'Successfully Updated!');
            return redirect()->route('admin.categories.index');
        }else {
            Session::flash('success', 'An Error Occurred!');
            return redirect()->route('admin.categories.index');
        }
    }


    public function unpublish() {
        $id = $_POST['id'];
        
        $del = Category::where('id', $id)->delete();
        
        if($del) {
            Session::flash('success', 'Successfully Deleted!');
            return redirect()->route('admin.categories.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.categories.index');
        }
    }

}
