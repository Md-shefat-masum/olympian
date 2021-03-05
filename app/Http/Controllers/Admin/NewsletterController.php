<?php

namespace App\Http\Controllers\Admin;

use App\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class NewsletterController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function index() {
        $data = Newsletter::latest('id')->get();
        return view('admin.newsletter.newsletter', compact('data'));
    }

    public function unpublish() {
        $id = $_POST['id'];
        
        $del = Newsletter::where('id', $id)->delete();
        
        if($del) {
            Session::flash('success', 'Successfully Deleted!');
            return redirect()->route('admin.newsletter.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.newsletter.index');
        }
    }

}
