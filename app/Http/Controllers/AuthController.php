<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['username' => $request->useremail, 'password' => $request->password])) {
            $request->session()->regenerate();

            $user = User::where('username', $request->useremail)->first();
            $request->session()->put('user', $user);

            return redirect('/');
        }

        if (Auth::attempt(['email' => $request->useremail, 'password' => $request->password])) {
            $request->session()->regenerate();

            $user = User::where('email', $request->useremail)->first();
            $request->session()->put('user', $user);

            return redirect('/');
        }

        return back()->with('error', 'Email atau Password salah');
    }
}
