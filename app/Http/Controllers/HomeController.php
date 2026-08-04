<?php

namespace App\Http\Controllers;
use App\Models\Route;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        if (Auth::check()) :
            return view('dashboard', [
                'routes'    => Route::orderBy('created_at')->get()
            ]);
        endif;

        return view('frontpage');
    }
}
