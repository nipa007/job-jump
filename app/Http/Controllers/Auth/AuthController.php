<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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


    public function account()
    {
        return view('backend.candidate.account');
    }


    public function accountUpdate(Request $request, $id)
    {


         $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:255',
            'current_password' => 'nullable|string|min:5',
            'new_password' => 'nullable|string|min:5',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::find($id);

            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;

        if ($request->filled('current_password') && $request->filled('new_password')) {
            if (Hash::check($request->current_password, $user->password)) {
                $user->password = Hash::make($request->new_password);
            } else {

                return redirect()->back()->with('error', 'Current password is incorrect');
            }
        }


        if ($request->hasFile('profile_pic')) {
            $file = $request->file('profile_pic');
            $filename = time() . '_' . preg_replace('/\s+/', '_', strtolower($file->getClientOriginalName()));
            $file->move(public_path('profile_pictures'), $filename);
            $user->profile_pic = 'profile_pictures/' . $filename;
        }

        $user->save();

        return redirect()->back()->with('message', 'Account updated successfully!');
    }
}
