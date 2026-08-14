<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function index() {
        return view('routes.index', [
            'routes'    => Route::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
