<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Education;

class MainController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        $educations = Education::all();
        $profile = Profile::first();
        return view('welcome', compact('profile', 'skills', 'educations'));
    }
}
