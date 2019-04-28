<?php

namespace Chatty\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Chatty\Models\User;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        // dd('sign up');
        $this->validate($request, [
            'email' => 'required|unique:users|email|max:255',
            'username' => 'required|unique:users|alpha_dash|max:20',
            'password' => 'required|min:6',
        ]);
        // dd('all ok');

        User::create([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('home')->with('info', 'Your Account Has Been Created !');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
        // dd('Sign In');
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        // dd('all ok');

        if (!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))) {
            return redirect()->back()->with('info', 'Error, Could not sign in with those details.');
        }

        return redirect()->route('home')->with('info', 'You are now Signed In.');
    }

    public function getSignout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
