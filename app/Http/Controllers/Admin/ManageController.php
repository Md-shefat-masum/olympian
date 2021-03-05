<?php

namespace App\Http\Controllers\Admin;

use App\Basic;
use App\Social;
use Carbon\Carbon;
use App\ContactInformation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ManageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function basic(){
        $data = Basic::where('basic_status', 1)->where('id', 1)->firstOrFail();
        return view('admin.manage.basic', compact('data'));
    }

    public function update_basic(Request $request) {
        $basic = Basic::findOrFail($request->id);        
        $basic->basic_name = $request->basic_name;
        $basic->basic_title = $request->basic_title;
        $basic->basic_subtitle = $request->basic_subtitle;
        $basic->basic_aboutus = $request->basic_aboutus;
        $basic->basic_details = $request->basic_details;
        $basic->updated_at = Carbon::now()->toDateTimeString();


        if($request->hasFile('basic_favicon')) {
            if(Storage::exists($basic->basic_favicon)) {
                Storage::delete($basic->basic_favicon);
            }

            $basic->basic_favicon = $request->basic_favicon->store('');
        }

        if($request->hasFile('basic_logo')) {
            if(Storage::exists($basic->basic_logo)) {
                Storage::delete($basic->basic_logo);
            }

            $basic->basic_logo = $request->basic_logo->store('');
        }

        if($request->hasFile('basic_stickylogo')) {
            if(Storage::exists($basic->basic_stickylogo)) {
                Storage::delete($basic->basic_stickylogo);
            }

            $basic->basic_stickylogo = $request->basic_stickylogo->store('');
        }

        if($request->hasFile('basic_flogo')) {
            if(Storage::exists($basic->basic_flogo)) {
                Storage::delete($basic->basic_flogo);
            }

            $basic->basic_flogo = $request->basic_flogo->store('');
        }

        $basicSave = $basic->save();

        if($basicSave){
            Session::flash('success', 'Updated Successfully!');
            return redirect('admin/manage/basic');
        }else{
            Session::flash('error', 'An error occurred!');
            return redirect('admin/manage/basic');
        }
    }



    public function social(){
        $data = Social::where('sm_status', 1)->where('id', 1)->firstOrFail();
        return view('admin.manage.social',compact('data'));
    }

    public function update_social(Request $request) {
        $social = Social::findOrFail($request->id);              
        $social->sm_facebook = $request->sm_facebook;
        $social->sm_twitter = $request->sm_twitter;
        $social->sm_linkedin = $request->sm_linkedin;
        $social->sm_pinterest = $request->sm_pinterest;
        $social->sm_instagram = $request->sm_instagram;
        $social->sm_youtube = $request->sm_youtube;
        $social->sm_google = $request->sm_google;
        $social->updated_at = Carbon::now()->toDateTimeString();

        $socialSave = $social->save();

        if($socialSave){
            Session::flash('success', 'Updated Successfully!');
            return redirect('admin/manage/social');
        }else{
            Session::flash('error', 'An error occurred!');
            return redirect('admin/manage/social');
        }
    }


    public function contact(){
        $data = ContactInformation::where('ci_status', 1)->where('id', 1)->firstOrFail();
        return view('admin.manage.contact',compact('data'));
    }

    public function update_contact(Request $request) {
        $contact = ContactInformation::findOrFail($request->id);              
        $contact->ci_phone1 = $request->ci_phone1;
        $contact->ci_phone2 = $request->ci_phone2;
        $contact->ci_email1 = $request->ci_email1;
        $contact->ci_email2 = $request->ci_email2;
        $contact->ci_add1 = $request->ci_add1;
        $contact->ci_add2 = $request->ci_add2;
        $contact->updated_at = Carbon::now()->toDateTimeString();

        $contactSave = $contact->save();

        if($contactSave){
            Session::flash('success', 'Updated Successfully!');
            return redirect('admin/manage/contact');
        }else{
            Session::flash('error', 'An error occurred!');
            return redirect('admin/manage/contact');
        }
    }


}
