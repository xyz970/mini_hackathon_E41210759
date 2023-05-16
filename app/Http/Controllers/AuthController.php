<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login_process(Request $request)
    {
        $input = $request->only(['email','password']);
        if (Auth::attempt(['email'=>$input['email'],'password'=>$input['password']])) {
            return redirect()->route('admin.dashboard');
        }else {
            return redirect()->back()->with('error','true');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        return view('user-register');
    }

    public function register_process(Request $request)
    {
        $input = $request->only(['name','email']);
        $input += array('password'=>bcrypt($request->input('password')));
        User::create($input);
        // dd($input);
        return redirect()->route('login')->with('register','true');
    }
}
