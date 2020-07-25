<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('user.dashboard.profile');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'file' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);


        if ($request->password) {
            $password = Hash::make($request->password);
        } else {
            $password = Auth::user()->password;
        }

        if ($request->file('file')) {

            $image = $request->file('file');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $folderPath = public_path('avatar');
            $image->move($folderPath, $name);

        }else{
            $name = Auth::user()->avatar;
        }


        $email = $request->email;
        $password = $password;

        User::where('id', Auth::user()->id)
            ->update([
                    'email' => $email,
                    'password' => $password,
                    'avatar' => $name

                ]
            );

        return redirect()->back()->with('msg', 'Profile Updated Successfully');


    }
}
