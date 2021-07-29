<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certification;
use App\Models\Services;

class MainController extends Controller
{
    public function index()
    {
        $services = Services::all();
        $certifications = Certification::all();
        $experiences = Experience::all();
        $skills = Skill::all();
        $educations = Education::all();
        $profile = Profile::first();
        return view('welcome', compact('profile', 'skills', 'educations', 'experiences', 'certifications', 'services'));
    }
}
