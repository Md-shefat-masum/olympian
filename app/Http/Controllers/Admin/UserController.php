<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware('superadmin');
    }

    public function index() {
        $users = User::latest('id')->cursor();
        return view('admin.user.index', compact('users'));
    }


    public function create() {
        $allRole = Role::all();
        return view('admin.user.create', compact('allRole'));
    }


    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',            
            'phone' => 'required|unique:users,phone,',
            'username' => 'required|unique:users,username,',
            'email' => 'required|string|email|max:200|unique:users,email,',
            'password' => 'required|confirmed'
        ], [
            'name.required' => 'please enter your name',
            'email.required' => 'please enter your email address',
        ]);

        
        $data = $request->all();

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['status'] = (boolean)$request->status;
        $data['password'] = bcrypt($request->password);
        $data['photo'] = null;

        if($request->hasFile('photo'))  {
            $data['photo'] = $request->photo->store('');
        }


        $userCreate = User::create($data);


        if($userCreate) {
            Session::flash('success', 'Successfully Created!');
            return redirect()->route('admin.users.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.users.index');
        }
    }


    public function edit(User $user) {
        $allRole = Role::where('role_status', 1)->orderBy('id', 'ASC')->get();
        return view('admin.user.edit', compact('user', 'allRole'));
    }


    public function update(Request $request, User $user) {   
             
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|unique:users,phone,' . $user->id,            
            'email' => 'required|string|email|max:160|unique:users,email,' . $user->id,
        ], [
            'name.required' => 'please enter your name',
            'email.required' => 'please enter your email address',
        ]);


        if($request->has('name')) {
            $user->name = $request->name;
        }

        if($request->has('status')) {
            $user->status = (boolean)$request->status;
        }else {
            $user->status = 0;
        }

        if($request->has('phone') && $user->phone != $request->phone) {
            $user->phone = $request->phone;
        }

        if($request->has('role_id') && $user->role_id != $request->role_id) {
            $user->role_id = $request->role_id;
        }

        if($request->has('email') && $user->email != $request->email) {
            $user->email = $request->email;
        }

        if($request->has('twitter') && $user->twitter != $request->twitter) {
            $user->twitter = $request->twitter;
        }
        
        if($request->has('fb') && $user->fb != $request->fb) {
            $user->fb = $request->fb;
        }

        if($request->has('linkedin') && $user->linkedin != $request->linkedin) {
            $user->linkedin = $request->linkedin;
        }

        if($request->has('designation') && $user->designation != $request->designation) {
            $user->designation = $request->designation;
        }

        if($request->has('address') && $user->address != $request->address) {
            $user->address = $request->address;
        }

        if($request->has('note') && $user->note != $request->note) {
            $user->note = $request->note;
        }


        if($request->hasFile('photo')) {
            // $photo = $request->file('photo');
            // $photoName = "user_".$user->id."_".time()."_".uniqid().".".$photo->getClientOriginalExtension();
            if(Storage::exists($user->photo)) {
                Storage::delete($user->photo);
            }

            $user->photo = $request->photo->store('');
        }

        $userSave = $user->save();


        if($userSave) {
            Session::flash('success', 'Successfully Updated!');
            return redirect()->route('admin.users.index');
        }else {
            Session::flash('success', 'An Error Occurred!');
            return redirect()->route('admin.users.index');
        }
    }

    public function unpublish() {
        $id = $_POST['id'];
        
        $del = User::where('id', $id)->delete();
        
        if($del) {
            Session::flash('success', 'Successfully Deleted!');
            return redirect()->route('admin.users.index');
        }else {
            Session::flash('error', 'An Error Occurred!');
            return redirect()->route('admin.users.index');
        }
    }
}
