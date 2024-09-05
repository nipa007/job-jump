<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function homePage()
    {
        return view('home');
    }


    public function aboutPage()
    {
        return view('frontend.pages.about-us');
    }


    public function jobPage()
    {
        return view('frontend.pages.jobs');
    }

    public function contactPage()
    {
        return view('frontend.pages.contact-us');
    }





}
