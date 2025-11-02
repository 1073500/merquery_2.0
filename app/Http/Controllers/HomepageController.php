<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
