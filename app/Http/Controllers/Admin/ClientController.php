<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index() {
        $clients = Client::latest('id')->cursor();
        return view('admin.client.index', compact('clients'));
    }


    public function create() {
        return view('admin.client.create');
    }


    public function store(Request $request) {
        $this->validate($request, [
            'client_name' => 'required',            
        ], [
            'client_name.required' => 'please enter client_name',
        ]);

        $data = $request->all();

        $data['client_name'] = $request->client_name;
        $data['client_photo'] = null;

        if($request->hasFile('client_photo'))  {
            $data['client_photo'] = $request->client_photo->store('');
        }


        $clientCreate = Client::create($data);


        if($clientCreate) {
            Session::flash('success', 'Successfully Created!');
            return redirect()->route('admin.clients.index');            
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.clients.index');            
        }
    }


    public function edit(Client $client) {
        return view('admin.client.edit', compact('client'));
    }


    public function update(Request $request, Client $client) {
        $this->validate($request, [
            'client_name' => 'required',            
        ], [
            'client_name.required' => 'please enter client_name',
        ]);


        if($request->has('client_name') && $client->client_name != $request->client_name) {
            $client->client_name = $request->client_name;
        }

        if($request->hasFile('client_photo')) {
            if(Storage::exists($client->client_photo)) {
                Storage::delete($client->client_photo);
            }

            $client->client_photo = $request->client_photo->store('');
        }

        $clientSave = $client->save();


        if($clientSave) {
            Session::flash('success', 'Successfully Updated!');
            return redirect()->route('admin.clients.index');
        }else {
            Session::flash('success', 'An Error Occurred!');
            return redirect()->route('admin.clients.index');
        }
    }

    public function unpublish() {
        $id = $_POST['id'];
        
        $del = Client::where('id', $id)->delete();
        
        if($del) {
            Session::flash('success', 'Successfully Deleted!');
            return redirect()->route('admin.clients.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.clients.index');
        }
    }

}
