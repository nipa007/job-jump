<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function companyDashboard()
    {
        return view('backend.company.dashboard');
    }

    public function companyRegister()
    {
        return view('frontend.pages.auth.company-registration');
    }

    public function companyDoRegister (Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);


        $validatedData['role'] = 'company';

        User::create($validatedData);


        return redirect()->route('home.page')->with('message', 'Registration Successful!');

    }
}
