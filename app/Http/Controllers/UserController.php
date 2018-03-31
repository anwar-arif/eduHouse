<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth') ;
    }

    public function show($id)
    {
        $user = User::where('user_id' , $id)->get() ;
        return $user ;
    }

    public function UploadImage(Request $request )
    {

//        $this->validate($request, [
//            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images/UploadImage');
            $image->move($destinationPath, $name);
            $user = User::where('user_id', Auth::user()->user_id)->get();
            $user->profile_pic_path = $image;
            $user->save();
            return back()->with('success', 'Image Upload successfully');
        }
        return "Called" ;
    }

    public function showProfile() {
        return view('profile-2') ;
    }
}
