<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function dashboardindex()
    {
        return view('test');
    }

    public function index()
    {
        $profile = Profile::first();
        return view('admin.profile.index', compact('profile'));
    }

    public function profileinsertion(Request $request)
    {
        $profile = Profile::where('email', $request->get('email'))->first();
        if(isset($profile)){
            $profile->update([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'description' => $request->get('description'),
                'address' => $request->get('address'),
                'phone' => $request->get('phone'),
                'city' => $request->get('city'),
                'country' => $request->get('country'),
                'birthdate' => $request->get('birthdate'),
                'degree' => $request->get('degree')
            ]);
        }
        else{
            $profiledata = Profile::create($request->all());
        }
        return redirect()->route('dashboard.about')->with('message', 'Profile Updated Successfully');
    }

}
