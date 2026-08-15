<?php

namespace App\Http\Controllers;

use App\Models\Route;

class RoutesController extends Controller
{
    public function index() {
        return view('routes.index', [
            'routes'    => Route::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
