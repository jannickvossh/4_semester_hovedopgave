<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        if (Auth::check()) :
            return view('dashboard');
        endif;

        return view('frontpage');
    }
}
