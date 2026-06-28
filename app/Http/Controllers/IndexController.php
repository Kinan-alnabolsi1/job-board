<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    function index()
    {
        return view('index');
    }

    function about()
    {
        return view('about' , ['PageTitle'=> 'About Page']);
    }

    function contact()
    {
        return view('contact' , ['PageTitle'=> 'Contact Page']);
    }
}
