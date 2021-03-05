<?php

namespace App\Http\Controllers\Admin;

use App\About;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function about() {
        $data = About::where('about_status', 1)->where('id', 1)->firstOrFail();
        return view('admin.about.about', compact('data'));        
    }

    public function update_about(Request $request) {
        $about = About::findOrFail($request->id);        
        $about->about_pagename = $request->about_pagename;
        $about->about_toplinkone = $request->about_toplinkone;
        $about->about_toplinktwo = $request->about_toplinktwo;
        // $about->about_pagebanner = $request->about_pagebanner;
        $about->about_title = $request->about_title;
        $about->about_description1 = $request->about_description1;
        $about->about_description2 = $request->about_description2;
        $about->about_description3 = $request->about_description3;
        $about->about_button = $request->about_button;
        $about->about_url = $request->about_url;
        // $about->about_photo = $request->about_photo;
        $about->updated_at = Carbon::now()->toDateTimeString();


        if($request->hasFile('about_pagebanner')) {
            if(Storage::exists($about->about_pagebanner)) {
                Storage::delete($about->about_pagebanner);
            }

            $about->about_pagebanner = $request->about_pagebanner->store('');
        }

        if($request->hasFile('about_photo')) {
            if(Storage::exists($about->about_photo)) {
                Storage::delete($about->about_photo);
            }

            $about->about_photo = $request->about_photo->store('');
        }

        $aboutSave = $about->save();

        if($aboutSave){
            Session::flash('success', 'Updated Successfully!');
            return redirect('admin/about');
        }else{
            Session::flash('error', 'An error occurred!');
            return redirect('admin/about');
        }
    }
}
