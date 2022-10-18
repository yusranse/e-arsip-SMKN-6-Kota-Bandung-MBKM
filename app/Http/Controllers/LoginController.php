<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller{
    public function index(){
        return view('/',[
            'title' => 'Login Page'
        ]);
    }

    public function profile(){
        return view('/admin.profile',[
            'title' => 'Profile'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request -> validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/dashboard')->with('success', 'Anda berhasil Login');
        }
        return back()->with('error', 'Anda Bukan Anggota KAMI!!!');
    }

    public function logout(Request $request){
        Session::flush();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
            return redirect('/')->with('success', 'Anda Berhasil Logout');
        }
}