<?php

namespace App\Http\Controllers\Admin;

use App\Page;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function page() {
        $data = Page::where('id', 1)->firstOrFail();
        return view('admin.page.page', compact('data'));        
    }

    public function update_page(Request $request) {
        $page = Page::findOrFail($request->id);        
        $page->pagename1 = $request->pagename1;
        $page->link1 = $request->link1;
        $page->pagename2 = $request->pagename2;
        $page->link2 = $request->link2;
        $page->pagename3 = $request->pagename3;
        $page->link3 = $request->link3;
        $page->pagename4 = $request->pagename4;
        $page->link4 = $request->link4;
        $page->home_link = $request->home_link;
        $page->updated_at = Carbon::now()->toDateTimeString();


        if($request->hasFile('game_pagebanner')) {
            if(Storage::exists($page->game_pagebanner)) {
                Storage::delete($page->game_pagebanner);
            }

            $page->game_pagebanner = $request->game_pagebanner->store('');
        }

        if($request->hasFile('gallery_pagebanner')) {
            if(Storage::exists($page->gallery_pagebanner)) {
                Storage::delete($page->gallery_pagebanner);
            }

            $page->gallery_pagebanner = $request->gallery_pagebanner->store('');
        }

        if($request->hasFile('blog_pagebanner')) {
            if(Storage::exists($page->blog_pagebanner)) {
                Storage::delete($page->blog_pagebanner);
            }

            $page->blog_pagebanner = $request->blog_pagebanner->store('');
        }

        if($request->hasFile('contact_pagebanner')) {
            if(Storage::exists($page->contact_pagebanner)) {
                Storage::delete($page->contact_pagebanner);
            }

            $page->contact_pagebanner = $request->contact_pagebanner->store('');
        }

        $pageSave = $page->save();

        if($pageSave){
            Session::flash('success', 'Updated Successfully!');
            return redirect('admin/page');
        }else{
            Session::flash('error', 'An error occurred!');
            return redirect('admin/page');
        }
    }
}
