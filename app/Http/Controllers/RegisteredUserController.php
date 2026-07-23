<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterUserRequest $request)
    {
        $user = new User;

        $user->first_name   = $request->firstName;
        $user->last_name    = $request->lastName;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
