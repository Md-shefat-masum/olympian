<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $galleries = Gallery::latest('id')->cursor();
        return view('admin.gallery.index', compact('galleries'));
    }


    public function create() {
        return view('admin.gallery.create');
    }


    public function store(Request $request) {
        $this->validate($request, [
            'gallery_photo' => 'required',            
        ], [
            'gallery_photo.required' => 'please enter photo for gallery',
        ]);

        $data = $request->all();

        $data['gallery_photo'] = null;

        if($request->hasFile('gallery_photo'))  {
            $data['gallery_photo'] = $request->gallery_photo->store('');
        }


        $galleryCreate = Gallery::create($data);


        if($galleryCreate) {
            Session::flash('success', 'Successfully Created!');
            return redirect()->route('admin.galleries.index');            
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.galleries.index');            
        }
    }



    public function edit(Gallery $gallery) {
        return view('admin.gallery.edit', compact('gallery'));
    }


    public function update(Request $request, Gallery $gallery) {
        $this->validate($request, [
            'gallery_photo' => 'required',            
        ], [
            'gallery_photo.required' => 'please enter photo for gallery',
        ]);

        if($request->hasFile('gallery_photo')) {
            if(Storage::exists($gallery->gallery_photo)) {
                Storage::delete($gallery->gallery_photo);
            }

            $gallery->gallery_photo = $request->gallery_photo->store('');
        }

        $gallerySave = $gallery->save();


        if($gallerySave) {
            Session::flash('success', 'Successfully Updated!');
            return redirect()->route('admin.galleries.index');
        }else {
            Session::flash('success', 'An Error Occurred!');
            return redirect()->route('admin.galleries.index');
        }


    }

    public function unpublish() {
        $id = $_POST['id'];
        
        $del = Gallery::where('id', $id)->delete();
        
        if($del) {
            Session::flash('success', 'Successfully Deleted!');
            return redirect()->route('admin.galleries.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.galleries.index');
        }
    }


}
