<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $attempt = [
            'email'     => $request->email,
            'password'  => $request->password
        ];

        if (Auth::attempt($attempt)) :
            return redirect()->route('home');
        endif;

        return back();
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
