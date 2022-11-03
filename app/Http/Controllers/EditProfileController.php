<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    public function index() {
        return view('/editprofile',[
            'title' => 'Edit Profile'
        ]);
    }

    public function update(Request $request)
    {
        $request->user()->update(
            $request->all()
        );

        return redirect()->back();
    }
}
