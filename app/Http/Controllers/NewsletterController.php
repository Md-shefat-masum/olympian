<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsletterController extends Controller
{
    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',                        
        ], [
            'email.required' => 'please enter your email',
            'email.email' => 'Must be an email',
        ]);

        $data = $request->all();


        $newsletterCreate = Newsletter::create($data);


        if($newsletterCreate) {
            Session::flash('success', 'Successfully signed up for newsletter');
            return redirect()->back();           
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->back();            
        }

    }
}
