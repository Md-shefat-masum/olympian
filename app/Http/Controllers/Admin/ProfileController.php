<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Session\Session;

class ProfileController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('admin.profile.index');
    }

    public function updateProfile(Request $request) {
        $user = User::findOrFail(Auth::id());

        if($user->email == $request['email']) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'photo' => 'image',
            ], [
                'name.required' => 'Please enter your name!',
                'email.required' => 'Please enter your email!',
            ]);
        }else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'photo' => 'image',
            ], [
                'name.required' => 'Please enter your name!',
                'email.required' => 'Please enter your email!',
            ]);
        }

        $profile = User::where('id', $user->id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'note' => $request['note'],
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($request->hasFile('photo')) {
            if(Storage::exists($user->photo)) {
                Storage::delete($user->photo);
            }
            $user->photo = $request->photo->store('');
        }

        $userSave = $user->save();

        if($userSave) {
            return back()->with('success', 'Profile successfully updated!');
        }else {
            return back()->with('error', 'An error occurred!');
        }
    }

    public function updatePassword(Request $request) {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        $hashedPass = Auth::user()->password;

        if(Hash::check($request->old_password, $hashedPass)) {
            if(!Hash::check($request->password, $hashedPass)) {
                $user = User::find(Auth::id());
                $pass = User::where('id', $user->id)->update([
                    'password' => Hash::make($request['password']),
                    'updated_at' => Carbon::now()->toDateTimeString(),
                ]);
                if($pass) {
                    Auth::logout();
                    session()->flush();
                    return back();
                }
            }else {
                return back()->with('error', 'New password can not be the same as old one!');
            }
        }else {
            return back()->with('error', 'Old password is wrong!');
        }

    }
}
