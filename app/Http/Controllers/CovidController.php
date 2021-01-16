<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CovidController extends Controller
{
    public function about()
    {
        return view('about');
    }

    
    public function symptoms()
    {
        return view('symptoms');
    }
    
    public function contact()
    {
        return view('contact');
    }
    
    public function covid()
    {
        return view('covid');
    }
}
