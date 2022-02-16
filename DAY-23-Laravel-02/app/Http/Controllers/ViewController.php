<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //

    public function index()
    {
//        return "Hello";
        return view('test');
    }

    public function basis()
    {
//        return "<h1>HELLO BASIS</h1>";
        return view('demo');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}
