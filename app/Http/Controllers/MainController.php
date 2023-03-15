<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Comic;

class MainController extends Controller
{
    public function index()
    {
        $comics = Comic::where('id', '<', 7)->get();

        return view('welcome', compact('comics'));
    }
}
