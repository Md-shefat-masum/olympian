<?php

namespace App\Http\Controllers\Admin;

use App\Contactus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ContactusController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $data = Contactus::latest('id')->where('conus_status', 1)->get();
        return view('admin.contactus.index', compact('data'));
    }

    public function show($id){
        $data = Contactus::where('conus_status', 1)->where('id', $id)->firstOrFail();
        return view('admin.contactus.show', compact('data'));
    }

    public function unpublish() {
        $id = $_POST['id'];
        
        $del = Contactus::where('id', $id)->delete();
        
        if($del) {
            Session::flash('success', 'Successfully Deleted!');
            return redirect()->route('admin.contactus.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.contactus.index');
        }
    }
}
