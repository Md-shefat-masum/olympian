<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index() {
        $banners = Banner::latest('id')->cursor();
        return view('admin.banner.index', compact('banners'));
    }


    public function create() {
        return view('admin.banner.create');
    }

 
    public function store(Request $request) {
        $this->validate($request, [
            'ban_title' => 'required',            
        ], [
            'ban_title.required' => 'please enter banner title',
        ]);

        $data = $request->all();

        $data['ban_status'] = (boolean)$request->ban_status;
        $data['photo'] = null;

        if($request->hasFile('photo'))  {
            $data['photo'] = $request->photo->store('');
        }


        $bannerCreate = Banner::create($data);


        if($bannerCreate) {
            Session::flash('success', 'Successfully Created!');
            return redirect()->route('admin.banners.index');            
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.banners.index');            
        }

    }


    public function edit(Banner $banner) {
        return view('admin.banner.edit', compact('banner'));
    }


    public function update(Request $request, Banner $banner) {      
        $this->validate($request, [
            'ban_title' => 'required',            
        ], [
            'ban_title.required' => 'please enter banner title',
        ]);


        if($request->has('ban_title') && $banner->ban_title != $request->ban_title) {
            $banner->ban_title = $request->ban_title;
        }

        if($request->has('ban_subtitle') && $banner->ban_subtitle != $request->ban_subtitle) {
            $banner->ban_subtitle = $request->ban_subtitle;
        }

        if($request->has('ban_button') && $banner->ban_button != $request->ban_button) {
            $banner->ban_button = $request->ban_button;
        }

        if($request->has('ban_url') && $banner->ban_url != $request->ban_url) {
            $banner->ban_url = $request->ban_url;
        }

        if($request->has('ban_status')) {
            $banner->ban_status = (boolean)$request->ban_status;
        }else {
            $banner->ban_status = 0;
        }


        if($request->hasFile('photo')) {
            // $photo = $request->file('photo');
            // $photoName = "user_".$user->id."_".time()."_".uniqid().".".$photo->getClientOriginalExtension();
            if(Storage::exists($banner->photo)) {
                Storage::delete($banner->photo);
            }

            $banner->photo = $request->photo->store('');
        }

        $bannerSave = $banner->save();


        if($bannerSave) {
            Session::flash('success', 'Successfully Updated!');
            return redirect()->route('admin.banners.index');
        }else {
            Session::flash('success', 'An Error Occurred!');
            return redirect()->route('admin.banners.index');
        }
    }

    public function unpublish() {
        $id = $_POST['id'];
        
        $del = Banner::where('id', $id)->delete();
        
        if($del) {
            Session::flash('success', 'Successfully Deleted!');
            return redirect()->route('admin.banners.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.banners.index');
        }
    }

}
