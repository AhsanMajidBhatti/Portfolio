<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class MainController extends Controller
{
    public function index()
    {
        $profile = Profile::first();
        return view('welcome', compact('profile'));
    }
}
