<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CandidateController extends Controller
{
    public function candidateDashboard()
    {
        return view('backend.candidate.dashboard');
    }

    public function candidateRegister()
    {
        return view('frontend.pages.auth.candidate-registration');
    }

    public function candidateDoRegister (Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        $validatedData['role'] = 'candidate';

        User::create($validatedData);


        return redirect()->route('home.page')->with('message', 'Registration Successful!');

    }
}
