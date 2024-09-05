<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{


    public function loginPage()
    {
        return view('frontend.pages.auth.login');
    }
    public function doLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            if(Auth::user()->role == 'admin'){
                return redirect()->route('admin.dashboard')->with('message', 'Login Successful!');
            }elseif(Auth::user()->role == 'company'){
                return redirect()->route('company.dashboard')->with('message', 'Login Successful!');
            }elseif(Auth::user()->role == 'candidate'){
                return redirect()->route('candidate.dashboard')->with('message', 'Login Successful!');
            }


        } else {
            return redirect()->route('login')->with('message', 'Login Failed. Check your credentials!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home.page')->with('logout', 'Logout Successful!');
    }
}
