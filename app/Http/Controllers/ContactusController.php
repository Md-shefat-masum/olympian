<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactusController extends Controller
{
    public function index() {
        return view('website.contact');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'conus_name' => 'required',            
            'conus_mess' => 'required',            
        ], [
            'conus_name.required' => 'please enter your name',
            'conus_mess.required' => 'please enter your message',
        ]);

        $data = $request->all();


        $conusCreate = Contactus::create($data);


        if($conusCreate) {
            Session::flash('success', 'Message has been sent successfully!');
            return redirect()->route('website.contact');            
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('website.contact');            
        }

    }
}
