<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (! Auth::attempt($credentials)) {
            return back()->withErrors(['password' => 'The provided credentials do not match our records.'])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('home'))->with('success', 'You are now logged in.');
    }
}
